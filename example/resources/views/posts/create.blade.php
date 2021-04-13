@extends('layouts.app')

@section('content')

<h1>Create Post</h1>
{!! Form::open() !!}
<!--<form method="post" action="/posts">-->
    @csrf
    <input type="text" name="title" placeholder="Enter title">
    <input type="submit" name="submit">
</form>

@endsection