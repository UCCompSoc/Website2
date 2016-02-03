<?php
$active = "home";
include 'include/header.php';
?>

        <section class='hero full-blue'>
            <div class='hero-graphic'>
                <?php echo file_get_contents("resources/planet.svg"); ?>
                <?php echo file_get_contents("resources/stars.svg"); ?>
            </div>

            <div class='hero-text'>
                CompSoc is
                <ul class='rollover' id='rollover'>
                    <li>Academic</li>
                    <li>Friendly</li>
                    <li>Community</li>
                    <li>Industry</li>
                    <li>Fun</li>
                    <li>Helpful</li>
                    <li>Social</li>
                </ul>
            </div>

            <a href="#about" class='next-arrow'>Next</a>
        </section>

        <section id='about'>
            <h2>About</h2>

            <div class='image smaller right'>
                <img src='/resources/computer.png' alt='computer'>
                <blockquote>A very inspirational quote.</blockquote>
                <attr>A person</attr>
            </div>

            <div class='text larger left'>
                <p>CompSoc is the University of Canterbury's Computer Society, dedicated to providing the UC community, a wide range of events and opportunities. CompSoc aims to offer students the full uni experience, with great events ranging from social BBQs to academic workshops, as well as enough industry opportunities to succeed university and beyond.</p>

                <p><a href='/about.html'>Read more...</a></p>
            </div>

            <a href="#events" class='next-arrow'>Next</a>
        </section>

        <section id="events">
            <h2>Events</h2>

            <div class='image smaller left'>
                <img src='/resources/computer.png' alt='computer'>
                <blockquote>A very inspirational quote.</blockquote>
                <attr>A person</attr>
            </div>

            <div class='text larger right'>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p><a href='/events.html'>Read more...</a></p>
            </div>

            <a href="#resources" class='next-arrow'>Next</a>
        </section>

        <section id="resources">
            <h2>Resources</h2>

            <div class='image smaller right'>
                <img src='/resources/computer.png' alt='computer'>
                <blockquote>A very inspirational quote.</blockquote>
                <attr>A person</attr>
            </div>

            <div class='text larger left'>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p><a href='/resources.html'>Read more...</a></p>
            </div>

            <a href="#sponsors" class='next-arrow'>Next</a>
        </section>

        <section id='sponsors'>
            <h2>Sponsors</h2>

            <div class='image smaller left'>
                <img src='/resources/computer.png' alt='computer'>
                <blockquote>A very inspirational quote.</blockquote>
                <attr>A person</attr>
            </div>

            <div class='text larger right'>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p><a href='/sponsors.html'>Read more...</a></p>
            </div>

            <a href="#contact" class='next-arrow'>Next</a>
        </section>

        <section id="contact">
            <h2>Contact</h2>

            <div class='image smaller right'>
                <img src='/resources/computer.png' alt='computer'>
                <blockquote>A very inspirational quote.</blockquote>
                <attr>A person</attr>
            </div>

            <div class='text larger left'>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p><a href='/contact.html'>Read more...</a></p>
            </div>

            <div class='clearfix'></div>
        </section>

<?php
include 'include/footer.php';
?>
