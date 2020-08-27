@extends('main')

@section('content')

    <h2>Photos List</h2>

    @foreach( photos as $photo )
    
        <article class="photo-container">         
                                
            <h3>{{ $photo->photo_title }}</h3> (<span id="photo_id">{{ $photo->photo_number }}</span> )
            
            <img src= "{{ $photo->photo_url }}" alt="alt" title="title" />
                    
        </article>

    @endforeach

@endsection