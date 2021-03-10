@extends('layouts.app')

@section('name')
    
<div class="container-fluid">
    <div class="row">
        <div class="background-image col-sm-12 font-weight-bold h1 text-center text-light mx-auto">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            Welcome Readers.
            <br>
            <br>
            <a class="btn btn-light font-weight-bold" href="/blog">Read More</a>
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row ">
        <div class="col-2"></div>
            <div class="col-4">
                <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="" srcset="">
        </div>
        <div class="col-4  blog-title">
            <p class="font-weight-bold h1">My First Blog Post</p>
            <p class="font-italic h5 text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <br>
            <p class="font-weight-bold h4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <br>
            <a href="" class="btn btn-primary">Find Out More</a>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-12 text-center text-uppercase text-dark font-weight-bold h4">
            Blog
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12  text-center text-uppercase">
            <p class="font-weight-bold h1">Recent Post<p>
        </div>
        <div class="col-12  text-center">
            <p class="font-italic h5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis quasi cum mollitia officiis error. Consequatur laudantium id, dolorum exercitationem cumque eum nam? Blanditiis ipsa ducimus alias similique, atque voluptatem aspernatur?<p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 recent">
                    <br>
                    <p class="font-weight-bold font-italic text-light h2">Post</p>
                    <br>
                    <span class="font-weight-bold text-light h2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, odit libero laudantium, eaque esse non quae error voluptatum fugiat laboriosam quia cumque dolorem eius voluptates omnis recusandae reprehenderit ad vero.
                    </span>
                    <br>
                    <br>
                    <br>
                    <a href="" class="btn btn-success bg-transparent border border-transparent rounded-pill text-light font-weight-bold h2 find">FIND OUT MORE</a>
                </div>
                <div class="col-12 col-sm-6 py-0 px-0 mt-50">
                    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="" srcset="">
                </div>
                
            </div>
        </div>

    </div>
</div>
@endsection
