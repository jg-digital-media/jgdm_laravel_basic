@extends('main')

@section('content')


<?php  

$site_title = "Laravel Photo Album - Laravel Example";
$page_title = "Photo List ";
$site_keywords = "photography, laravel, boo, routes, databases, others.";
$site_description = "description goes here";
$page_url = "link to go here!";
$page_img = "img/logo.jpg";

?>


    <h2>Photos List</h2>

    

    <article class="photo_container">

        @foreach( $photos as $photo )
                                
            <article class="photo_item">
                
                <div class="col_one">
                    <h3>{{ $photo->photo_title }}</h3> 
                    <img src= "{{ $photo->photo_url }}" alt="Photo: {{ $photo->photo_title }}" title="Photo: {{ $photo->photo_title }}" />
                </div>


                <div class="col_two">
                    <span id="photo_id">( {{ $photo->photo_number }} )</span>
                    <div>{{ $photo->photo_description }}</div>
                <div>
            </article>

        @endforeach
    
          
    </article>

@endsection