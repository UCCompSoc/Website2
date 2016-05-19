<?php
$active = "events";
$title = "Events";
include 'include/header.php';
?>
        <div class="main">

            <div class='mini-menu'>
                <h2>Events</h2>
                <a href='#upcoming'>Upcoming Events</a>
                <a href='#what-we-do'>What we do</a>
            </div>

            <div class='body'>
                <section id="upcoming">
                    <h3>Upcoming Events</h3>

                    <div class='event-holder' id='event-holder'>
                        <div class='event-scroll' id='event-scroll'>
                            <img src='resources/loading.png' alt='loading' class='loading' />
                        </div>
                    </div>

                    <div class="text">
                        <p>
                            View all events on our <a href='https://www.facebook.com/UcCompSoc/events' target='_blank'>Facebook Events Page</a>.
                        </p>
                    </div>

                    <div class='clearfix'></div>

                </section>

                <section id="what-we-do">
                    <h3>What we do</h3>

                    <div class='text'>
                        <h4>Social BBQs</h4>
                        <p>
                            We try to have one every term, and we always fulfill our duty in providing you kegs on tap and enough sausages and hash browns to fill you right up.
                            <!-- https://mega.nz/#F!uBoFgJjL!A68kRpjxZ70lrI7Z2sScCA -->
                        </p>
                    </div>

                    <div class='image'>
                        <img src='resources/bbq.jpg' alt='Barbeque' class='bordered'>
                    </div>

                    <div class='text'>
                        <h4>Dota 2 LAN Tournaments</h4>
                        <p>
                            E-Sports is a growing phenomenon, and we're getting on board with one of the biggest Dota 2 Tournaments in the South Island with over 130 attendees and 80 contestants.
                            <!-- https://mega.nz/#F!SRQUDSoR!kD9QXrLcIknAPx6OrlprIg -->
                        </p>
                    </div>

                    <div class='image'>
                        <img src='resources/dota.jpg' alt='Dota 2 Tournament' class='bordered'>
                    </div>

                    <div class='text'>
                        <h4>Industry Talks</h4>
                        <p>
                            A wide variety of speakers from the real world! Not only are they often on the hunt for recruitment, but they offer great presentations with solid advice and opportunities.
                        </p>
                    </div>

                    <div class='image'>
                        <img src='resources/industry.jpg' alt='Industry Events' class='bordered'>
                    </div>

                    <div class='text'>
                        <h4>Tech Seminars and Workshops</h4>
                        <p>
                            Learn new skills to add to that CV of yours with our seminars and workshops, which every now and then are held by some big name companies, such as Google or Microsoft.
                        </p>
                    </div>

                    <div class='text'>
                        <h4>Academic Tutorials</h4>
                        <p>
                            Struggle no more with your assignments and quizzes by coming along to our free weekly tutorials where you can work on your own, or with a buddy, and ask for help from one of our tutors. Rumor has it, we also provide pizza every so often…
                        </p>
                    </div>

                    <div class='text'>
                        <h4>CS+X Festival</h4>
                        <p>
                            A series of talks dedicated to discovering fun, inspiring, and unexpected ways that computer science impacts our world and relates to the topics that you are passionate about. The CS + X Festival features talks, workshops, and videos by a diverse range of industry professionals and researchers.
                            More information from 2015s event can be found at <a href='https://cs-plus-x-uc.appspot.com/'>https://cs-plus-x-uc.appspot.com/</a>
                        </p>
                    </div>

                    <div class='text'>
                        <p>Other events which we aim to hold in 2016 include:</p>
                        <ul>
                            <li>Hackathon</li>
                            <li>CantaCode (Cantamath style computer science competition)</li>
                            <li>Smaller social activities such as board game and movie nights</li>
                        </ul>
                    </div>

                    <div class='clearfix'></div>

                </section>
            </div>
        </div>

<?php
$scripts = array('scripts/min/events-min.js');
include 'include/footer.php';
?>
