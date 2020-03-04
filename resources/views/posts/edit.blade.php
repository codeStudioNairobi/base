@extends('layouts.app')
@section('title')
Edit '{{$post->title}}' | The Shepherd Inn - Nyahururu
@endsection

@section('content')
<div class="container" style="margin-top:100px;">
    <h1>Edit Posts</h1> 
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
       <div class="form-group">
           {{Form::label('title', 'Title')}}
           {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
       </div>
       <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection