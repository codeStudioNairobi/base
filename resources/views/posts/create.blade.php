@extends('layouts.app')
@section('title')
Publish Some News | The Shepherd Inn - Nyahururu
@endsection

@section('content')
<div class="container" style="width:100%;margin-top:100px;">
    <h1>Publish</h1> 
    <div class="container">
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
       <div class="form-group">
           {{Form::label('title', 'Title')}}
           {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
       </div>
       <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
</div>
@endsection