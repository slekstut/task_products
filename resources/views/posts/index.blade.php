@extends('layouts.app')

@section('content')
    <h1>Product list</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-body bg-light mt-3 mb-3">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Uploaded on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No products found</p>
    @endif
@endsection