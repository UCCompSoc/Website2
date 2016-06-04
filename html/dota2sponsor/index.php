<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Winterlude Dota 2 Tournament</title>
        <link rel="stylesheet" href="dota.css" media="screen" charset="utf-8">
        <link rel="stylesheet" href="dota_small.css" media="screen and (max-width: 750px)" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        /* Darkbox
        ---------------------------------------- */
        .darkbox {
        	position:fixed;
        	top:0;
        	left:0;
        	z-index:999;
        	display:none;
        	overflow:hidden;
        	width:100%;
        	height:100%;
        	}
        	.darkbox .darkbox-shadow {
        		position:absolute;
        		top:0;
        		left:0;
        		width:100%;
        		height:100%;
        		background:#000;
        		}
        	.darkbox .darkbox-canvas {
        		position:absolute;
        		top:50%;
        		left:50%;
        		overflow:hidden;
        		margin:-40px 0 0 -40px;
        		width:80px;
        		height:80px;
        		-webkit-border-radius:15px;
        		-moz-border-radius:15px;
        		border-radius:15px;
        		background:#000 url(spinner.png) 24px 24px no-repeat;
        		}
        		.darkbox .darkbox-canvas IMG {
        			display:block;
        			visibility:hidden;
        			}
        	.darkbox .darkbox-button {
        		position:absolute;
        		top:-13px;
        		z-index:1;
        		display:none;
        		overflow:hidden;
        		width:30px;
        		height:30px;
        		background:url(close.png) no-repeat;
        		cursor:pointer;
        		}
        	.darkbox .darkbox-button-left {
        		left:-16px;
        		}
        	.darkbox .darkbox-button-right {
        		right:-16px;
        		}

        /* Darkbox On
        ---------------------------------------- */
        .darkbox-on {
        	display:block;
        	}

        /* Darkbox Loaded
        ---------------------------------------- */
        .darkbox-loaded {
        	}
        	.darkbox-loaded .darkbox-canvas {
        		overflow:visible;
        		height:auto;
        		-webkit-border-radius:0;
        		-moz-border-radius:0;
        		border-radius:0;
        		background:none;
        		}
        		.darkbox-loaded .darkbox-canvas IMG {
        			width:100%;
        			visibility:visible;
        			}

        /* Darkbox Done
        ---------------------------------------- */
        .darkbox-done {
        	}
        	.darkbox-done .darkbox-button {
        		display:block;
        		}
        </style>
    </head>
    <body>
        <div class="container">
            <div id='menubar'>
                <a href='#whoarewe'>
                    Who Are We?
                </a>
                <a href='#whatisthis'>
                    Event
                </a>
                <!-- <a href='#previousevents'>
                    Previous Events
                </a> -->
                <a href='#howcanyouhelp'>
                    Sponsorship
                </a>
                <!-- <a href='#howcanyoubenefit'>
                    How Can You Benefit
                </a> -->
                <a href='#testimonials'>
                    Testimonials
                </a>
            </div>
            <header>
                <h1>
                    <span class='header-winterlude'>Winterlude</span>
                    <span class='header-dota'>Dota 2 Tournament</span>
                </h1>
            </header>
            <div class="content">
                <span class='hello'>Hey there<?php
                        $lookup = array(
                            'a5cf52' => 'DragonPC',
                            '87596a' => 'Red Bull',
                            'ca8a2c' => 'NetSpeed',
                            '8cde77' => 'Spark Mobile',
                            'cb6ab3' => 'Asus New Zealand',
                            '0d9988' => 'MyRepublic',
                            'd1316a' => 'PlayTech',
                            'd9b5ae' => 'Loot Crate',
                            '10e7b0' => 'PB Tech',
                            'e4b68b' => 'Kosco',
                            'd6b091' => 'Armageddon Internet Cafe',
                            'f17a9f' => "Pepe's Mexican Grill",
                        );
                        if (isset($_GET['c'])) {
                            echo ", ".$lookup[$_GET['c']];
                        }
                    ?>!</span>
                <section id="whoarewe">
                    <h2>Who Are We?</h2>
                    <h3>UC CompSoc</h3>
                    <p>CompSoc is the University of Canterbury's student run Computer Society. As an established club, we are providing opportunities for students and computer enthusiasts to make new friends, get involved with the department, meet industry leaders and have fun!
                    As our goal is to further students academically, socially, and professionally, we organize social BBQs, LAN events, tutorials, industry functions, and tech talks. This year, we have over 350 members. We provide a variety events for our members, some examples include Dota 2 LAN events, social BBQs, Hackathon Code Challenge and tech talks featuring companies such as Google and Microsoft.
                    This year, we plan to take our club even further and present our members with even better opportunities, both academic and social.</p>
                    <a class='website-link' href='http://www.compsoc.org.nz' target='_blank'>
                        http://www.compsoc.org.nz/
                    </a>

                    <h3>UCGG</h3>
                    <p>The UC Gaming Guild  provides a variety of video gaming events on campus for a variety of different gaming styles. Our main events are our PC LANs where we have had up to 100 people attending. We also run smaller events including tournaments for games like Hearthstone, League of Legends, Dota 2, Counterstrike, and Halo, “Freeplay” events where anyone is free to drop in and play games like Guitar Hero and Mario Kart throughout a day, and Retro Gaming nights, Quiz Night and Horror Gaming nights. Our mission is to promote social video gaming and our target audience is anyone who enjoys any form of video game.</p>
                    <a class='website-link' href='http://www.ucgg.org.nz' target='_blank'>
                        http://www.ucgg.org.nz/
                    </a>
                </section>
                <section id="whatisthis">
                    <h2>What Is This?</h2>
                    <div class='video'>
                        <iframe src="//drive.google.com/file/d/0B5OLtzImcemhZDFLT3pEcmNqMjA/preview" width="640" height="480"></iframe>
                    </div>
                    <p>The Winterlude Dota 2 LAN is a gaming tournament where participants will be playing the computer game Dota 2 in a double elimination style tournament.The LAN event will involve participants bringing in their preferred personal computer, and competing in teams of 5.</p>
                    <p>The 2016 Dota 2 Tournament is planned for the 23rd of July and will run for at least 10 hours. We had a turnout of over 150 people at the event last year and we expect that number to be even bigger this year.</p>
                    <p>Although the majority of the participants’ time will be spent on the computer, food interludes and other entertainment activities will be organized to prevent fatigue and allow for breaks from the action.</p>
                    <p>To add competition and interest, we plan on giving out prizes to the winners and finalists, along with a few spot prizes and raffles throughout the event.</p>
                </section>
                <section id="previousevents">
                    <h2>Previous Events</h2>
                    <div class='video'>
                        <iframe width="854" height="480" src="//www.youtube.com/embed/VbmSWjKK9l4" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <p>As mentioned above, we had over 150 attendees for last year's event. The demographic for the attendees were mainly males, with some females, in their teen to late 20’s. Most attendees were university students, however we had a few high school students, full-time workers and people outside of Christchurch participating as well.</p>
                    <p>While around three quarters of the attendees were participants, the rest were also spectators. The actual size of our audience is likely to be much larger than this, as we streamed our games with commentating on Twitch (a website for live-streaming). This allowed viewers from across all of New Zealand to spectate. The event ran over 12 hours with little to no technical problems. Past this, the event was a huge success with positive feedback and has generated a lot of hype and anticipation for this year’s tournament.</p>
                    <div class="photos">
                        <span>Click image to view larger version.</span>
                        <a href='01.jpg' rel='darkbox'><img src='01.thumb.jpg' /></a>
                        <a href='02.jpg' rel='darkbox'><img src='02.thumb.jpg' /></a>
                        <a href='03.jpg' rel='darkbox'><img src='03.thumb.jpg' /></a>
                        <a href='04.jpg' rel='darkbox'><img src='04.thumb.jpg' /></a>
                        <a href='05.jpg' rel='darkbox'><img src='05.thumb.jpg' /></a>
                    </div>
                </section>
                <section id="howcanyouhelp">
                    <h2>How Can You Help?</h2>
                    <p>CompSoc is student run and most of our support come from it’s members, the computer science and engineering departments at our university, the University of Canterbury’s Student Association and a few supportive companies.</p>
                    <p>While CompSoc LAN events do get a share of the club budget, past events were mainly financially supported by the registration fees from the players, and largely by generous donations from companies, both large and local.</p>
                    <p>This year is our biggest year yet.</p>
                    <p>After the particular success of our last Dota 2 LAN, and the growing media presence of the game and esports in general over the years, there has been a definite hype that has be stirring within the gaming community in Christchurch. While this is exciting for us, it also means that we are going to need the adequate amount of financial support to meet the public’s expectations. This is where you can help us.</p>

                    <h3>Prizes</h3>
                    <ul>
                        <li>Financial contributions for the 1st place prizes.</li>
                        <li>Other contributions for the 1st place prizes.</li>
                        <li>Financial contributions for the 2nd place prizes.</li>
                        <li>Other contributions for the 2nd place prizes.</li>
                        <li>Financial contributions for the 3rd place prizes.</li>
                        <li>Other contributions for the 3rd place prizes.</li>
                        <li>Financial contributions for Red v Blue Mini-Tournament prizes</li>
                        <li>Other contributions for Red v Blue Mini-Tournament prizes</li>
                        <li>Contributions for the spot prizes.</li>
                        <li>Contributions for the raffle prizes.</li>
                    </ul>
                    <h3>Food and Activities</h3>
                    <ul>
                        <li>Financial contributions for extra activities.</li>
                        <li>Other contributions  extra activities.</li>
                        <li>Financial contributions for food and drinks.</li>
                        <li>Other contributions for food and drinks.</li>
                    </ul>
                    <h3>Media and Marketing</h3>
                    <ul>
                        <li>Media costs ($400).</li>
                        <li>Financial contributions for marketing and advertising.</li>
                        <li>Extra casting equipment such as mics, green screen, etc</li>
                    </ul>
                    <p>Other contributions refer to any non-monetary donations that may be relevant.</p>
                    <p>Any other suggestions will be appreciated and considered.</p>
                </section>
                <section id="howcanyoubenefit">
                    <h2>How Can You Benefit?</h2>
                    <p>Apart from the the content feeling one can experience after an act of altruism, there are other benefits that comes with sponsoring our event.</p>
                    <p>You will not only receive our utmost thanks, but we can display our gratitude over several mediums.</p>
                    <ul>
                        <li>We will be periodically expressing our gratitude to our sponsors throughout the event.</li>
                        <li>We have space around the rooms where banners or other advertising material for your company can be displayed.</li>
                        <li>We can set up a stall in the entertainment room where we can advertise or display your company’s merchandise or products to attendees during the event.</li>
                        <li>We can display the brands of our sponsors in between and during games on the Twitch stream which target audiences online from across the world.</li>
                        <li>A teaser video will be made before the event which will display the confirmed date of the tournament, as well as the brands of our sponsors and will be hosted on at least the CompSoc Facebook Page, UCGG’s Facebook Page and the University of Canterbury’s Computer Science and Engineering Facebook Page.</li>
                        <li>A video will be made for the event which will include in-game footage of the event and the brands of our sponsors and will be hosted on at least the CompSoc Facebook Page, UCGG’s Facebook Page and the University of Canterbury’s Computer Science and Engineering Facebook Page.</li>
                        <li>You can advertise your company on our event website where we will be updating information and players will be registering their teams.</li>
                        <li>We have the Official CompSoc and UCGG Facebook pages where we can thank our sponsors.</li>
                        <li>We also have a separate event Facebook page where sponsors will be thanked throughout the site and on the cover photo.</li>
                        <li>We will be advertising our event on the University’s student magazine, Canta, which has a target audience of the whole student association. We can add the brands of our key sponsors along with our advertisement.</li>
                        <li>We have a plaque made for the winners of the tournament. We hope that this plaque will continue to be used for future tournaments. It is planned to engrave the name of our key sponsors on the back of the plaque.</li>
                    </ul>
                    <p>If any of these interest you, or you have other suggestions and would like to help sponsor our event, please do not hesitate to contact us so that we may negotiate the proper sponsor package for you.</p>
                </section>
                <section id="testimonials">
                    <h3>Testimonials</h3>
                    <div class='quote'>
                        <img src='SamJohnsonTestimonial.png' />
                        <blockquote>
                            The tournament was a great success. There were heaps of people that turned up and everyone had a good time. It flowed smoothly with the games starting in the early afternoon and ending at night. There was plenty of desk space for all with no lag issues at all. 10/10 would recommend for all Dota players in NZ! <br /><br />
                            <i>- Sam Johnson (Explosiv Fury), 2014 winner</i>
                        </blockquote>

                    </div>
                    <div class='quote'>
                        <img src='RobinLeeTestimonial.png' />
                        <blockquote>
                            The CompSoc Dota 2 Tournament 2015 was, to date, the most successful Dota 2 tournament to be hosted in Christchurch.  The tournament drew in a record number of players and was a great display of local talent.  The administration staff were always helpful, ensuring that the tournament ran as smoothly as possible, and resources were always sufficient.  Overall, the tournament was extremely enjoyable and I strongly recommend to anyone that enjoys Dota 2 to participate. <br /><br />
                            <i>- Robin Lee (iceDagger), 2015 winner</i>
                        </blockquote>
                    </div>
                </section>
            </div>
            <footer>
                <h2>Interested?</h2>
                <p>
                    Give us a call on 021 0244 7701<br />
                    or email us at <a href='mailto:president@compsoc.org.nz'>president@compsoc.org.nz</a>
                </p>
                <img src="compsoc.png" alt='CompSoc' />
                <img src="ucgg.png" alt='UCGG' />
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
        <script>
        (function(c){c.fn.darkbox=function(){function j(){clearInterval(m);d.css("background-position","24px 24px")}function h(){j();k.animate({opacity:0},q,function(){b.removeClass(r);d.stop();l.unbind("error",n).attr("src","")})}function o(a){if(27===a.which||32===a.which)if(0===c("div.darkbox:hidden").length){a.preventDefault();h()}}function n(){j();b.addClass("darkbox-error");setTimeout(h,s)}c('<div class="darkbox"><div class="darkbox-shadow"></div><div class="darkbox-canvas"><img alt=""><div class="darkbox-button" title="Close"></div></div></div>').appendTo("body");
        var q=100,s=800,r="darkbox-on darkbox-done darkbox-loaded darkbox-error",t=/mac/i.test(navigator.platform)?"darkbox-button-left":"darkbox-button-right",b=c("div.darkbox"),k=b.children("div.darkbox-shadow"),d=b.children("div.darkbox-canvas"),l=d.children("img"),u=d.children("div.darkbox-button"),m=0,i=0;k.css({opacity:0}).click(h);u.addClass(t).click(h);l.load(function(){j();var a=c(this),g=1,e=a.width(),f=a.height();g=b.width();var p=b.height();if(0===e&&0===f)setTimeout(function(){a.load()},10);
        else{if(e>g-50||f>p-50){g=Math.min((g-50)/e,(p-50)/f);e=Math.round(e*g);f=Math.round(f*g)}b.addClass("darkbox-loaded");d.animate({width:e,marginLeft:-e/2,height:f,marginTop:-f/2,opacity:1},400,function(){b.addClass("darkbox-done")})}});c(document).keypress(o).keydown(o);this.click(function(a){a.preventDefault();a=c(this);b.addClass("darkbox-on");d.css({width:"",marginLeft:"",height:"",marginTop:"",opacity:0.5});m=setInterval(function(){d.css("background-position","24px "+(24-56*i)+"px");i=7<=i?0:
        i+1},90);l.one("error",n).css({width:"",height:""}).attr("src",a.attr("href")).attr("alt",a.attr("title"));k.animate({opacity:0.6},200)});return this}})(jQuery);

        $('a[rel=darkbox]').darkbox();
        </script>
    </body>
</html>
