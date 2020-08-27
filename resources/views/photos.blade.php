@extends('main')

@section('content')

    <h2>Photos List</h2>

    

        <article class="photo-container">

            @foreach( $photos as $photo )
                                    
                    <h3>{{ $photo->photo_title }}</h3> (<span id="photo_id">{{ $photo->photo_number }}</span> )
                    
                    <img src= "{{ $photo->photo_url }}" alt="alt" title="title" />

                    <div>{{ $photo->photo_description }}</div>
                    
                    </title>

        @endforeach
    
          
    </article>

@endsection