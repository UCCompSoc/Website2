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
    title.innerHTML = name;

    var when = document.createElement('span');
    when.setAttribute('class', 'time');
    when.innerHTML = pretty_date(time);

    var link = document.createElement('a');
    link.setAttribute('class', 'link');
    link.setAttribute('href', 'https://www.facebook.com/events/' + id + '/');
    link.setAttribute('target', '_blank');
    link.appendChild(title);

    // var img = new Image();
    var img = document.createElement('div');
    // img.src = image;
    if (image.offset_x === 0) {
        image.offset_x = 50;
    }
    if (image.offset_y === 0) {
        image.offset_y = 50;
    }
    img.setAttribute('class', 'img');
    img.setAttribute('style', 'background-image: url(' +
        image.source + '); background-position: ' +
        image.offset_x + '% ' + image.offset_y + '%');
    img.setAttribute('alt', name);

    var event = document.createElement('div');
    event.setAttribute('class', 'event');
    event.appendChild(img);
    event.appendChild(link);
    event.appendChild(when);

    return event;
};

var set_dot = function(target) {
    $('.dot').each(function(j, dot) {
        $(dot).removeClass('active');
        if (j === target) {
            $(dot).addClass('active');
        }
    });
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

    set_dot(new_i);

    return new_i;
};

var setup_rollover = function(data, speed) {
    var i, repeat, interval, longtouch, startx, endx;
    var old_css;
    var next, prev;
    var event_scroll = $('#event-scroll');
    event_scroll.html("");

    var events = $(data.data).map(function(_, event){
        var e = create_event(
            event.name,
            event.id,
            event.start_time,
            event.cover
        );
        $(e).on('touchstart', function(ev){
            clearInterval(interval);
            longtouch = false;
            old_css  = $(this).css('transition');
            $(this).css('transition', 'none');
            setTimeout(function(){
                longtouch = true;
            }, 50);
            startx = ev.originalEvent.touches[0].pageX;
            endx = startx;
            console.log(startx);
        });
        $(e).on('touchmove', function(ev){
            ev.preventDefault();
            endx = ev.originalEvent.touches[0].pageX;
            console.log(endx);
            $(this).css(
                'transform',
                'translate3d(' + (endx - startx) + 'px,0,0)'
            );
        });
        var ended = function(ev){
            var reset = function(el, d){setTimeout(function(){$(el).css(
                'transform',
                'translate3d(0,0,0)'
            );}, d);};
            var threshold =  0.3 * document.body.offsetWidth;
            $(this).css('transition', old_css);
            if (longtouch === true) {
                if (startx - endx > threshold) {
                    console.log('Right');
                    reset(this, 500);
                    next(ev);
                } else if (endx - startx > threshold) {
                    console.log('Left');
                    reset(this, 500);
                    prev(ev);
                } else {
                    reset(this, 0);
                }
            } else {
                // No swipe
                reset(this, 0);
            }
            startx = 0; endx = 0;
            if (!interval) {
                interval = setInterval(repeat, speed);
            }
        };
        $(e).on('touchend', ended);
        $(e).on('touchcancel', ended);
        return e;
    });
    console.log(0.2 * document.body.offsetWidth);

    var length = events.length;

    console.log(events);
    events = events.get().reverse();
    event_scroll.append(events[0]);
    event_scroll.append(events[1]);
    var c1 = event_scroll.children()[0];
    var c2 = event_scroll.children()[1];
    c1.style.left = "0";
    c2.style.left = "100%";

    i = 0;
    // repeat = function(){
    //     i = animate_rollover(event_scroll, events, length, i);
    // };
    // interval = setInterval(repeat, speed);

    next = debounce(function(event) {
        event.preventDefault();
        clearInterval(interval);
        i = animate_rollover(event_scroll, events, length, i);
        interval = setInterval(repeat, speed);
        return false;
    }, 500);

    prev = debounce(function(event) {
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
        set_dot(i);
        interval = setInterval(repeat, speed);
        return false;
    }, 500);

    $("#next-arrow").on('click', next);
    $("#prev-arrow").on('click', prev);

    $('.dot').each(function(j, dot) {
        $(dot).on('click', debounce(function(event) {
            event.preventDefault();
            clearInterval(interval);
            var current_kids = event_scroll.children();
            var keep = current_kids[0];
            var remove = current_kids[1];
            event_scroll[0].removeChild(remove);
            remove.style.left = "0";
            var new_event = events[j];
            new_event.style.left = '100%';
            event_scroll.append(new_event);
            setTimeout(function() {
                keep.style.left = "-100%";
                new_event.style.left = "0";
                setTimeout(function() {
                    event_scroll[0].removeChild(keep);
                    keep.style.left = "0";
                    var next_j = (j+1) % length;
                    var next_event = events[next_j];
                    next_event.style.left = '100%';
                    event_scroll.append(next_event);
                }, 500);
            }, 1);
            set_dot(j);
            interval = setInterval(repeat, speed);
            return false;
        }, 500));
    });
};

var setup_arrows = function(holder) {
    var left = document.createElement('a');
    left.setAttribute('class', 'next-arrow');
    left.setAttribute('id', 'next-arrow');
    left.setAttribute('href', '#');
    left.innerHTML = "Next";

    var right = document.createElement('a');
    right.setAttribute('class', 'prev-arrow');
    right.setAttribute('id', 'prev-arrow');
    right.setAttribute('href', '#');
    right.innerHTML = "Previous";

    holder.append(right);
    holder.append(left);
};

var setup_dots = function(holder, count) {
    var dots = document.createElement('div');
    dots.setAttribute('class', 'dots');
    for (var i=0; i < count; i++) {
        var dot = document.createElement('a');
        if (i === 0) {
            dot.setAttribute('class', 'dot active');
        } else {
            dot.setAttribute('class', 'dot');
        }
        dot.setAttribute('href', '#');
        dot.innerHTML = String(i);
        dots.appendChild(dot);
    }
    holder.append(dots);
};

var show_single = function(data) {
    var event = data.data[0];
    var event_scroll = $('#event-scroll');
    event_scroll.append(create_event(
        event.name,
        event.id,
        event.start_time,
        event.cover
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
        holder.css('padding-bottom', 'calc(37% + 7rem)');
        show_single(data);
    } else {
        holder.css('padding-bottom', 'calc(37% + 7rem)');
        setup_arrows(holder);
        setup_dots(holder, data.data.length);
        setup_rollover(data, 5000);
    }
};

$(function() {

    $(document).ready(function(){
        $.ajax({
            dataType: "json",
            url: "resources/event-loader.php",
            success: event_callback
        });
    });

});
