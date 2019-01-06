@extends('layouts.app')
@section('content')    
    <div class="jumbotron text-center">
      <div class="container">
        <h1 class="display-3">Welcome To MedShop</h1>
        <p>This is the home page</p>
        @guest
          <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endguest
      </div>
    </div>
@endsection