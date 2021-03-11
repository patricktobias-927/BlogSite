@extends('layouts.app')


@section('content')

    <div class="container blog">
        <div class="row">
            <div class="col-12 text-center mb-50 font-weight-bold h1">
                BLOG POST
            </div>
        </div>
        <div class="row ">
            <div class="col-2"></div>
                <div class="col-4">
                    <img class="" src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="" srcset="">
            </div>
            <div class="col-4  blog-title">
                <p class="font-weight-bold h1">My First Blog Post</p>
                <p class="font-italic h5">By <strong class="font-italic font-weight-bold text-primary">Patrick Tobias</strong>, 1 day ago. </p>
                <br>
                <p class="font-weight-bold h4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <br>
                <a href="" class="btn btn-primary text-center font-weight-bold rounded-pill text-light h4">Keep Reading</a>
            </div>
        </div>
    </div>

    <br>

@endsection
   