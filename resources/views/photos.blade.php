@extends('main')

@section('content')

    <h2>Photos List</h2>

    

    <article class="photo-container">

        @foreach( $photos as $photo )
                                
            <article class="photo-item">
                
                <div class="col-one">
                    <img src= "{{ $photo->photo_url }}" alt="Photo: {{ $photo->photo_title }}" title="Photo: {{ $photo->photo_title }}" />
                </div>


                <div class="col-two">
                    <h3>{{ $photo->photo_title }}</h3> <span id="photo_id">( {{ $photo->photo_number }} )</span>
                    <div>{{ $photo->photo_description }}</div>
                <div>
            </article>

        @endforeach
    
          
    </article>

@endsection