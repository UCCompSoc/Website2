<?php
$active = "home";
include 'include/header.php';
?>

        <section class='hero full-blue'>
            <div class='hero-graphic'>
                <svg class="planet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 500 500">
                    <g transform="translate(250,250)">
                        <image x="-250" y="-250" width="500" height="500" xlink:href="/resources/blue-arrow.png" class="blue-arrow"/>
                        <image x="-210" y="-210" width="420" height="420" xlink:href="/resources/orange-arrow.png" class="orange-arrow"/>
                        <image x="-170" y="-170" width="340" height="340" xlink:href="/resources/blue-ring.png" class="blue-ring"/>
                    </g>
                    <image x="120" y="120" width="260" height="260" xlink:href="/resources/planet.png"/>
                </svg>
                <svg class="stars" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 500 500">
                    <g transform="translate(105, 15)">
                        <image x="-15" y="-15" width="30" height="30" xlink:href="/resources/star1.png" class="star1"/>
                    </g>
                    <g transform="translate(55, 465)">
                        <image x="-15" y="-15" width="30" height="30" xlink:href="/resources/star2.png" class="star2"/>
                    </g>
                    <g transform="translate(485, 395)">
                        <image x="-15" y="-15" width="30" height="30" transform-origin="485 395" xlink:href="/resources/star3.png" class="star3"/>
                    </g>
                    <g transform="translate(365, 20)">
                        <image x="-15" y="-15" width="30" height="30" xlink:href="/resources/star4.png" class="star4"/>
                    </g>
                    <ellipse cx="10" cy="300" rx="10" ry="10" style="fill:#eb6109;" class="star5" />
                    <ellipse cx="30" cy="150" rx="3" ry="3" style="fill:white;" class="star6" />
                    <ellipse cx="450" cy="130" rx="5" ry="5" style="fill:#eb6109;" class="star6" />
                    <ellipse cx="480" cy="230" rx="12" ry="12" style="fill:white;" class="star7" />
                    <ellipse cx="350" cy="490" rx="8" ry="8" style="fill:#eb6109;" class="star8" />
                </svg>
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
