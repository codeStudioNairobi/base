@extends('layouts.app')
@section('title')
{{ Auth::user()->name }} | The Shepherd Inn Nyahururu
@endsection

@section('content')
<br>
<div class="container" id="dashboard">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Your News Publications!<br>
                    <a class="btn btn-primary" href="/posts/create"><i class="fas fa-file"></i> Create New</a>
                </div>
                @if (count($posts) > 0)
                    
                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                    <td>{{$post->title}}</td>
                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default"><i class="far fa-edit"></i> Edit</a></td>
                        <td>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn'])}}
                            {!!Form::close()!!}
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                </table>
                @else 
                 <small class="text-center text-muted">"You have not published anything yet"</small>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
