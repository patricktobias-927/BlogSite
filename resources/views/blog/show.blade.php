@extends('layouts.app')

@section('create')

    <div class="container blog">
        <div class="row ">
            <div class="col-12 text-left  font-weight-bold h1">
                {{ $post->title }}
            </div>
        </div>
    </div>
    <div class="container blog">
        <div class="row">
            <div class="col-6">
                <img class="post_image" src="{{ asset('images/' . $post->image_path) }}" alt="" srcset="">
            </div>
            <div class="col-4 text-left font-italic h4">
               <p>By  <strong class="text-primary h3">{{ $post->user->name }}</strong> Created on, {{ date('jS M Y', strtotime($post->updated_at)) }}</p>  
               <br>
               <p class="font-weight-bold h4">{{ $post->description }}.</p>
               <br> 
            </div>
        </div>
    </div>



    
@endsection