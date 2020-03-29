@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
    <div class="col-lg-8">

        <!-- the actual blog post: title/author/date/content -->
        <h1><a href="">{{$post->title}}</a></h1>
        <p class="lead"><i class="fa fa-user"></i> by <a href="">{{$post->user->name}}</a>
        </p>
        <hr>
        <div class="card" style="width: 40rem;">
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">Post Description</h6>
            <p class="card-text">{{$post->description}}</p>
        </div>
        </div>
        <p><i class="fa fa-calendar"></i> Posted on {{$post->created_at}}</p>
        <p><i class="fa fa-calendar"></i> updated on {{$post->updated_at}}</p>

     
</div>       
</div>       
</div>       

@endsection