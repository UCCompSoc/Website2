<?php
$active = "resources";
$title = "Resources";
include 'include/header.php';
?>

        <div class="main">

            <div class='mini-menu'>
                <h2>Resources</h2>
                <a href='#heading'>Heading</a>
                <a href='#stuff-and-things'>Stuff and Things</a>
            </div>

            <div class='body'>

                <section id="heading">
                    <h3>Heading</h3>

                    <div class='text'>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                </section>

                <section id="stuff-and-things">
                    <h3>Stuff and Things</h3>

                    <ul class='resources'>
                        <li>
                            <a href='#'><img src='http://placehold.it/100x100' />
                            <span class='title'>Title</span></a>
                            <span class='description'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                            <div class='clearfix'></div>
                        </li>

                        <li>
                            <a href='#'><img src='http://placehold.it/100x100' />
                            <span class='title'>Title</span></a>
                            <span class='description'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                            <div class='clearfix'></div>
                        </li>
                    </ul>

                </section>
            </div>
        </div>


<?php
include 'include/footer.php';
?>
