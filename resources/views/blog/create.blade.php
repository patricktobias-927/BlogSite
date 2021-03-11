@extends('layouts.app')

@section('create')

    <div class="container blog">
        <div class="row">
            <div class="col-12 text-center mb-50 font-weight-bold h1">
                Create Post
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="container error">
        <div class="row">
            <div class="col-4">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-center mb-50 font-weight-bold bg-warning">
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>   
    @endif

    <form action="/blog" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container">
        <div class="row">
            <div class="col-12 font-weight-bold h1">
                Title
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input name="title" type="text" class="form-control w-100 shadow rounded title font-weight-bold">
            </div>
        </div>
        <div class="row">
            <div class="col-12 font-weight-bold h4">
                Description
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input name="description" type="text" class="form-control w-100 shadow rounded description font-weight-bold">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <input name="image" type="file" class="form-control-lg file">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <button type="submit" class="btn btn-lg btn-primary rounded-pill bg-primary font-weight-bold create">Submit Post</button>
            </div>
        </div>
    </div>

    </form>

    
@endsection