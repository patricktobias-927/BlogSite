@extends('layouts.app')

@section('create')

    <div class="container blog">
        <div class="row ">
            <div class="col-12 text-left mb-50 font-weight-bold h1">
                {{ $post->title }}
            </div>
        </div>
    </div>
    <div class="container blog">
        <div class="row">
            <div class="col-12 text-left mb-50 font-italic h4">
               <p>By  <strong class="text-primary h3">{{ $post->user->name }}</strong> Created on, {{ date('jS M Y', strtotime($post->updated_at)) }}</p>    
            </div>
        </div>
    </div>



    
@endsection