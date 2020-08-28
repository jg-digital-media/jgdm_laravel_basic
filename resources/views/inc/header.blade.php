<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">      

        <!-- meta tags -->
        <meta name="description" content="<?php echo $site_description; ?>">
        <meta name="keywords" content="<?php echo $site_keywords; ?>"> 
        <meta name="image" content=" <?php echo $page_img ?>">

        <!-- FACEBOOK: Open Graph -->
        <meta property="og:title" content="<?php echo $site_title; ?>">
        <meta property="og:description" content="<?php echo $site_description; ?>">
        <meta property="og:image" content="<?php echo $page_img ?>">
        <meta property="og:url" content="<?php echo $page_url; ?>">

        <!-- TWITTER: Open Graph -->
        <meta name="twitter:title" content="Jonathan Grieve | Amateur Photography">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="https://projects.jonniegrieve.co.uk/photography/boo-preview.png">
        <meta name="twitter:card" content="laravel_basic_photo_albumn">

        <!-- Canonical link -->
        <link rel="canonical" href="">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}" />

        <!-- Favicon -->
        <link rel="icon" href="favicon.png" type="image/png">
    
        
        <title><?php echo $page_title . " | " . $site_title; ; ?></title>

    </head>

    <body>       

        <main id="container">

            <header class="header">

                <img src="{{asset('img/logo.jpg')}}"  id="main_logo" alt="Main Logo" title="Main Logo" />
                
                <h1>Laravel Basic Website: Photo Album</h1>

                <nav class="nav_container">

                    @include("inc/nav")

                </nav>

            </header>