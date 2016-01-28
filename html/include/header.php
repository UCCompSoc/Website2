<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php if (isset($title)){echo "$title - ";} ?>CompSoc - University of Canterbury Computer Society</title>
        <link rel="stylesheet" href="/css/master.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="/css/mobile.css" media="screen and (max-width: 700px)" title="no title" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body <?php if($active == 'home') {echo 'id="home"';} ?>>
        <nav class='full-blue'>
            <span class='home-icon'>
                <a href='/index.php' >Home</a>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 400 400" class='menu-hamburger' id='menu-hamburger'>
                <rect x="0" y="80" rx="40" ry="40" width="400" height="80" style="fill:white;stroke:black;stroke-width:0;opacity:1" transform-origin="200 200" class="bar-top" />
                <rect x="0" y="260" rx="40" ry="40" width="400" height="80" style="fill:white;stroke:black;stroke-width:0;opacity:1" transform-origin="200 200" class="bar-bottom" />
            </svg>
            <span class='main-menu'>
                <a href='/index.php' class='home<?php if($active == 'home') {echo ' active';} ?>'>Home</a>
                <a href='/about.php' <?php if($active == 'about') {echo "class='active'";} ?>>About</a>
                <a href='/events.php' <?php if($active == 'events') {echo "class='active'";} ?>>Events</a>
                <a href='/resources.php' <?php if($active == 'resources') {echo "class='active'";} ?>>Resources</a>
                <a href='/sponsors.php' <?php if($active == 'sponsors') {echo "class='active'";} ?>>Sponsors</a>
                <a href='/contact.php' <?php if($active == 'contact') {echo "class='active'";} ?>>Contact</a>
            </span>
        </nav>
