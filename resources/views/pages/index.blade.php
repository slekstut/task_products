@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Welcome to Laravel app!</h1>
    <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
  </div>
@endsection