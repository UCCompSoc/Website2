$(function() {

    $('a[href*=#]:not([href=#])').click(function() {
        // Smooth scrolling to anchors
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                history.pushState(undefined, "Aaron Stockdill", this.hash);
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 300);
                $('nav').removeClass('showing');
                return false;
            }
        }
    });

    var  randomInt = function(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    };

    var enable_hamburger = function() {
        $("#menu-hamburger").on('click', function(){
            $("nav").toggleClass("showing");
        });
    };

    var animate_rollover = function(rollover, children, length, i) {
        rollover.html(children[i].outerHTML + children[(i+1) % length].outerHTML);

        var c1 = rollover.children()[0];
        var c2 = rollover.children()[1];

        c1.style.top = "0";
        c1.style.opacity = "1";
        c2.style.top = "0";
        c2.style.opacity = "0";

        setTimeout(function(){
            c1.style.top = "-4.5rem";
            c1.style.opacity = "0";
            c2.style.top = "-4.5rem";
            c2.style.opacity = "1";
        }, 1500);

        return (i + 1) % length;
    };

    $(document).ready(function() {
        enable_hamburger();

        if ($("body").attr('id') === 'home') {
            var rollover = $('#rollover');
            var children = rollover.children();
            var length = children.length;

            var i = animate_rollover(rollover, children, length, randomInt(0, length));
            setInterval(function(){
                i = animate_rollover(rollover, children, length, i);
            }, 2000);
        }
    });
});
