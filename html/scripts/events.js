var debounce = function(f, delay) {
    var fired = false;
    return function() {
        var context = this, args = arguments;
        if (fired === false) {
            fired = true;
            f.apply(context, args);
            setTimeout(function() {
                fired = false;
            }, delay);
        }
    };
};

var pretty_date = function(date) {
    // Return "day, 00 month, 00:00mm"

    var month_names = [
        "January", "February", "March",
        "April", "May", "June", "July",
        "August", "September", "October",
        "November", "December"
    ];

    var day_names = [
        "Sunday", "Monday", "Tuesday",
        "Wednesday", "Thursday", "Friday", "Saturday"
    ];

    var main = date.split("+")[0];
    var d = new Date(main);

    var hours = (function(h){return (h > 12) ? [h - 12, true] : [h, false];})(d.getUTCHours());
    var minutes = (function(m){return (m.length === 1) ? "0" + m : m;})(String(d.getUTCMinutes()));

    var string = day_names[d.getUTCDay()] +
        ', ' + d.getUTCDate() +
        ' ' + month_names[d.getUTCMonth()] +
        ', ' + hours[0] +
        ':' + minutes + ((hours[1]) ? "pm" : "am");
    return string;
};

var create_event = function (name, id, time, image) {
    var title = document.createElement('span');
    title.setAttribute('class', 'title');
    title.innerText = name;

    var when = document.createElement('span');
    when.setAttribute('class', 'time');
    when.innerText = pretty_date(time);

    var link = document.createElement('a');
    link.setAttribute('class', 'link');
    link.setAttribute('href', 'https://www.facebook.com/events/' + id + '/');
    link.setAttribute('target', '_blank');
    link.innerText = "View Event";

    var img = new Image();
    img.src = image;
    img.setAttribute('alt', name);

    var event = document.createElement('div');
    event.setAttribute('class', 'event');
    event.appendChild(img);
    event.appendChild(title);
    event.appendChild(when);
    event.appendChild(link);

    return event;
};

var animate_rollover = function(rollover, children, length, i) {
    var new_i = (i + 1) % length;
    var grab_next = (new_i + 1) % length;
    var kids = rollover.children();
    var c1 = kids[0];
    var c2 = kids[1];

    c1.style.left = "-100%";
    c2.style.left = "0";

    setTimeout(function(){
        rollover[0].removeChild(c1);
        c1.style.left = "0";
        rollover.append(children[grab_next]);
        var c3 = rollover.children()[1];
        c3.style.left = "100%";
    }, 500);

    return new_i;
};

var setup_rollover = function(data, speed) {
    var event_scroll = $('#event-scroll');
    event_scroll.html("");

    var events = $(data.data).map(function(_, event){
        return create_event(
            event.name,
            event.id,
            event.start_time,
            event.cover.source
        );
    });

    var length = events.length;

    event_scroll.append(events[0]);
    event_scroll.append(events[1]);
    var c1 = event_scroll.children()[0];
    var c2 = event_scroll.children()[1];
    c1.style.left = "0";
    c2.style.left = "100%";

    var i = 0;
    var repeat = function(){
        i = animate_rollover(event_scroll, events, length, i);
    };
    var interval = setInterval(repeat, speed);

    var next = debounce(function(event) {
        event.preventDefault();
        clearInterval(interval);
        i = animate_rollover(event_scroll, events, length, i);
        interval = setInterval(repeat, speed);
        return false;
    }, 500);

    var prev = debounce(function(event) {
        event.preventDefault();
        clearInterval(interval);
        i = (i - 1 + length) % length;
        var current_kids = event_scroll.children();
        var keep = current_kids[0];
        var remove = current_kids[1];
        event_scroll[0].removeChild(remove);
        remove.style.left = "0";
        var new_event = events[i];
        new_event.style.left = '-100%';
        event_scroll.prepend(new_event);
        setTimeout(function() {
            keep.style.left = "100%";
            new_event.style.left = "0";
        }, 1);
        interval = setInterval(repeat, speed);
        return false;
    }, 500);

    $("#next-arrow").on('click', next);
    $("#prev-arrow").on('click', prev);
};

var setup_arrows = function(holder) {
    var left = document.createElement('a');
    left.setAttribute('class', 'next-arrow');
    left.setAttribute('id', 'next-arrow');
    left.setAttribute('href', '#');
    left.innerText = "Next";

    var right = document.createElement('a');
    right.setAttribute('class', 'prev-arrow');
    right.setAttribute('id', 'prev-arrow');
    right.setAttribute('href', '#');
    right.innerText = "Previous";

    holder.append(right);
    holder.append(left);
};

var show_single = function(data) {
    var event = data.data[0];
    var event_scroll = $('#event-scroll');
    event_scroll.append(create_event(
        event.name,
        event.id,
        event.start_time,
        event.cover.source
    ));
};

var event_callback = function(data) {
    var holder = $("#event-holder");
    if (data.data.length === 0) {
        holder.addClass('text');
        holder.html("<p>There are no upcoming events.</p>");
        holder.css('padding-bottom', '0');
        holder.css('margin-top', 0);
    } else if (data.data.length === 1) {
        show_single(data);
    } else {
        setup_arrows(holder);
        setup_rollover(data, 5000);
    }
};

$(function() {

    $(document).ready(function(){
        $.ajax({
            dataType: "json",
            url: "/resources/events.php",
            success: event_callback
        });
    });

});
