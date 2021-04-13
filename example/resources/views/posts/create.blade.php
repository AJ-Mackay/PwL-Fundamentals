@extends('layouts.app')

@section('content')

<h1>Create Post</h1>
{!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\PostsController@store']) !!}
    @csrf
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn-primary']) !!}
    </div>
{!! Form::close() !!}

@endsection