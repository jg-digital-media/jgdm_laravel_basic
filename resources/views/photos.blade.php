<?php $photos = ""; ?>

@extends('main')

@section('content')

<h2>Photos List</h2>

@foreach( $photos as $photo )

    <article class="photo-container" id="photo_one">    

        <article class="photo-container" id="photo_two">
                            
            <h3>{{ $photo->photo_title }}</h3> (<span id="photo_id">{{ $photo->photo_number }}</span> )
            
            <img src= "{{ $photo->photo_url }}" alt="alt" title="title" />
            
        </article> 
                    
    </article>

@endforeach

@endsection