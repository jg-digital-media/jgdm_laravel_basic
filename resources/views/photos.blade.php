@extends('main')

@section('content')

    <h2>Photos List</h2>

    <article class="photo-container" id="photo_one">
                    
        <h3>Photo-one</h3>
    
        <img src="{{asset('img/boo_v1.png')}}" />
                
    </article>

    <article class="photo-container" id="photo_two">
                    
        <h3>Photo-two</h3>
    
        <img src="{{asset('img/boo_v2.png')}}" />
                
    </article>

@endsection