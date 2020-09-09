@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-dark">Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <small>Uploaded at {{$post->created_at}}</small>
@endsection