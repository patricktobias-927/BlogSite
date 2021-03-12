@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-50 font-weight-bold h1">
                BLOG POST
            </div>
        </div>

    @if (session()->has('message'))
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <p class="text-center mb-50 font-weight-bold bg-dark text-light rounded-pill">{{ session()->get('message') }}</p>
            </div>
        </div>
    @endif

    @if (Auth::check())
    <div class="row">
        <div class="col-4">
            <a href="/blog/create" class="btn btn-lg btn-primary rounded-pill bg-primary font-weight-bold mt-50 create">Create Post</a>
        </div>
    </div>
    @endif
    
</div>


@foreach ($posts as $post)

    <div class="container blog">
        <div class="row">
                <div class="col-6">
                    <img class="post_image" src="{{ asset('images/' . $post->image_path) }}" alt="" srcset="">
            </div>
            <div class="col-4  blog-title">
                <p class="font-weight-bold h1">{{ $post->title }}</p>
                <p class="h5">By <strong class="font-italic font-weight-bold text-primary h4">{{ $post->user->name }}</strong>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }} </p>
                <br>
                <p class="font-weight-bold h4">{{ $post->description }}.</p>
                <br>
                <a href="/blog/{{ $post->slug }}" class="btn btn-lg btn-primary text-center font-weight-bold rounded-pill text-light h3">Keep Reading</a>

                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <a href="/blog/{{ $post->slug }}/edit" class="edit text-dark font-italic h4" >Edit</a>

                <form action="/blog/{{ $post->slug }}" method="POST">
                    @csrf
                    @method('delete')

                    <button class="btn bg-0 btn-lg text-danger font-italic float-right">Delete</button>
                </form>
              @endif
            </div>
        </div>
    </div>

    <br>
    
@endforeach

  

@endsection
   