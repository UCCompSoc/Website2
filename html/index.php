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
                <img src='resources/CompSoc-Logo.png' alt='CompSoc Logo'>
            </div>

            <div class='text larger left'>
                <p>CompSoc is the University of Canterbury's Computer Society, dedicated to providing the UC community, a wide range of events and opportunities. CompSoc aims to offer students the full uni experience, with great events ranging from social BBQs to academic workshops, as well as enough industry opportunities to succeed university and beyond.</p>

                <p><a href='about.php'>Read more...</a></p>
            </div>

            <a href="#events" class='next-arrow'>Next</a>
        </section>

        <section id="events">
            <h2>Events</h2>

            <div class='image smaller left'>
                <img src='resources/eventsHomePage.jpg' alt='Event' class='bordered'>
            </div>

            <div class='text larger right'>
                <p>CompSoc offers a range of events for any individual, ranging from assisting with academic pursuits, to exciting industry opportunities and even social events for relaxing and meeting fellow like minded people. Recent events include club bbq, academic tutorials, CSSE careers fair and much more.</p>

                <p><a href='events.php'>Read more...</a></p>
            </div>

            <a href="#resources" class='next-arrow'>Next</a>
        </section>

        <section id="resources">
            <h2>Resources</h2>

            <div class='image smaller right'>
                <img src='resources/pencil.png' alt='Pencil'>
            </div>

            <div class='text larger left'>
                <p>CompSoc aims to provide all sorts of useful services and support to help any and all students through the year. These include physical and mental health information, the "CompSoc Unofficial Guide to CSSE" and up to date information on our special CompSoc workshops. We also have office hours for any in-person questions.</p>

                <p><a href='resources.php'>Read more...</a></p>
            </div>

            <a href="#sponsors" class='next-arrow'>Next</a>
        </section>

        <section id='sponsors'>
            <h2>Sponsors</h2>

            <div class='image smaller left'>
                <img src='resources/face.png' alt='Face'>
            </div>

            <div class='text larger right'>
                <p>CompSoc is thankful for the support of many generous industry professionals. With their support we are capable of running our many events. If you are interested in joining the ranks of these giving groups don’t hesitate to ask. </p>

                <p><a href='sponsors.php'>Read more...</a></p>
            </div>

            <a href="#contact" class='next-arrow'>Next</a>
        </section>

        <section id="contact">
            <h2>Contact</h2>

            <div class='image smaller right'>
                <img src='resources/phone.png' alt='Phone'>
            </div>

            <div class='text larger left'>
                <p>If you need to reach CompSoc for any reason, please check out our list of ways to contact us. We look forward to hearing from you! </p>

                <p><a href='contact.php'>Read more...</a></p>
            </div>

            <div class='clearfix'></div>
        </section>

<?php
include 'include/footer.php';
?>
