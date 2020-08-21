@extends('main')

@section('content')


<h2>Photos List</h2>

<article class="photo-container" id="photo_one">
                    
    @foreach ($photos as $photo)
        <article class="photo-container" id="photo_two">
                            
            <h3>{$course->photo_title}}</h3> (<span id="photo_id">{{ $photo->photo_number }})
            
            <img src="{{asset('{{$photo->photo_url}} />" alt="alt" title="title" />
            
        </article> 
    @endforeach
                
</article>
    
    
@endsection