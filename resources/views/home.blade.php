@extends('main')

@section('content')

<?php  

$site_title = "Laravel Photo Album - Laravel Example";
$page_title = "Home ";
$site_keywords = "photography, laravel, boo, routes, databases, others.";
$site_description = "description goes here";
$page_url = "link to go here!";
$page_img = "img/logo.jpg";

?>

    <article class="home_container">

        <div class="welcome_block">

            <h2 class="page_title">Welcome</h2>

            <img src="img/boo_v1.png" alt="img" title="img" id="main_image" />

        </div>

        <div class="description_block">  

            <h2>Photo Album project created in Laravel.</h2>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore autem expedita accusamus! Dolorem laboriosam deserunt nam, dolores esse accusamus laborum reiciendis dolore quos aliquam totam architecto ipsa nihil aliquid placeat.</p>

            <h3>Category</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore autem expedita accusamus! Dolorem laboriosam deserunt nam, dolores esse accusamus laborum reiciendis dolore quos aliquam totam architecto ipsa nihil aliquid placeat.</p>

            <h3>Category</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore autem expedita accusamus! Dolorem laboriosam deserunt nam, dolores esse accusamus laborum reiciendis dolore quos aliquam totam architecto ipsa nihil aliquid placeat.</p>

        </div>

    </article>



@endsection