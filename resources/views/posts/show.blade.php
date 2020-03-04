@extends('layouts.app')
@section('title')
{{$post->title}} | The Shepherd Inn - Nyahururu
@endsection

@section('content')
<div class="container">
<a href="/posts" class="btn btn-outline-dark mt-3"><i class="fas fa-caret-left"></i> Go Back</a>
<h1>{{$post->title}}</h1> 
<img style="width:100%;height:400px;" src="/storage/cover_images/{{ $post->cover_image }}" alt="{{ $post->title }}'s image">
<br><br>
<small>Published by {{$post->user->name}} {{$post->created_at->diffForhumans()}}</small>
<hr>
<div>{!! nl2br(e($post->body)) !!}</div>
<hr>
@if(!Auth::guest())
   @if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary"><i class="far fa-edit"></i> Edit</a>

{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
   @endif
@endif
</div>
@endsection