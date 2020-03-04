@extends('layouts.app')
@section('title')
News | The Shepherd Inn - Nyahururu
@endsection

@section('content')
<br>
<div class="container">
    <h1>Shepherd Inn News</h1>
    <br>
    @if(count($posts) > 0)
       @foreach ($posts as $post)
       
       <div class="media mb-4 ">
        <img style="height:64px;width:64px;" src="/storage/cover_images/{{ $post->cover_image }}" class="align-self-start mr-3" alt="{{ $post->title }}'s image">
        <div class="media-body">
          <h5 class="mt-0"><a style="text-decoration:none;" href="/posts/{{$post->id}}">{{ $post->title }}</a></h5>
          <p>{{Str::limit($post->body)}}</p>
          <p class="text-muted">Published {{ $post->created_at->diffForhumans() }} by {{$post->user->name}}</p>
            </div>
      </div>
    
       @endforeach
       {{$posts->links()}}
    @else
       <p>No News Found</p>
    @endif 
</div>   
@endsection