<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php if (isset($title)){echo "$title - ";} ?>CompSoc - University of Canterbury Computer Society</title>
        <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 700px)" title="no title" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="favicons/manifest.json">
        <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta name="description" content="CompSoc - University of Canterburys Computer Society">
    </head>
    <body <?php if($active == 'home') {echo 'id="home"';} ?>>
        <?php include_once("analyticstracking.php") ?>
        <nav class='full-blue'>
            <span class='home-icon'>
                <a href='index.php' >Home</a>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 400 400" class='menu-hamburger' id='menu-hamburger'>
                <rect x="0" y="80" rx="40" ry="40" width="400" height="80" transform-origin="200 200" class="bar-top bar" />
                <rect x="0" y="260" rx="40" ry="40" width="400" height="80" transform-origin="200 200" class="bar-bottom bar" />
            </svg>
            <span class='main-menu'>
                <a href='index.php' class='home<?php if($active == 'home') {echo ' active';} ?>'>Home</a>
                <a href='about.php' <?php if($active == 'about') {echo "class='active'";} ?>>About</a>
                <a href='events.php' <?php if($active == 'events') {echo "class='active'";} ?>>Events</a>
                <a href='resources.php' <?php if($active == 'resources') {echo "class='active'";} ?>>Resources</a>
                <a href='sponsors.php' <?php if($active == 'sponsors') {echo "class='active'";} ?>>Sponsors</a>
                <a href='contact.php' <?php if($active == 'contact') {echo "class='active'";} ?>>Contact</a>
            </span>
        </nav>
