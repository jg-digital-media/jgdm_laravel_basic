<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Photo Album in Laravel</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}" />

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