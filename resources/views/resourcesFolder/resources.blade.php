
@extends('includes.navbar')

@section('content')
@include('messages.messages')
<html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/app.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
</head>
<header class="header">
        {{-- <div class="header__logo-box">
            <img src="/img/logokenya.png" alt="kenya logo" class="header__logo"/>
        </div> --}}
        <div class="header__text-box">
        <h1 class="heading-primary">
        <span class="heading-primary--main">MOH</span>
        <br>
        <span class="heading-primary--sub">VIEW POSTS</span>
        </h1>
        {{-- <a href="#" class="btn btn--white btn--animated">POSTS</a> --}}
    </div>
    </header>
    <main>
    @if(count($posts) > 0)
        @foreach($posts as $post)
           <!-- <div class="col-sm-4">
                <div class="column">
                   <div class="col-md-8 col-sm-8">
                       <img style="width:250px;height:250px;" src="/storage/cover_images/{{$post->cover_image}}">
                       <td><img src="{{ asset('/posts/' . $post['cover_image'])}}" width="250px;" height="250px;" alt="image"></td>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3 class="text-center"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small class= "text-center">Written on {{$post->created_at}} by {{$post->user->hospital}}</small>
                        <small class= "text-center">Written on {{$post->created_at}} by <strong>MINISTRY OF HEALTH,KENYA</strong></small>
                    </div>
                </div>
            </div>-->
 <div style="border: 1px solid cornflowerblue; width:fit-content; margin:80px; padding:20px;">
<div class="card mb-3" style="max-width: 800px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ url('/images/bluehealth2.jpg') }}" class="card-img-top" alt="post">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <hr style="color: blue;">
        <h3 class="card-title" style="text-align:left;"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <p class="card-text">{{$post->body}}</p>
        <p class="card-text"><small class="text-muted">Written on {{$post->created_at}} by <strong><Br> MINISTRY OF HEALTH,KENYA</strong></small></p>
      </div>
    </div>
    </div>
  </div>
</div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
    </main>
@endsection