@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-8 col-lg-8">
      <h1 class="display-4">About</h1>
      <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga a necessitatibus eligendi accusamus maxime doloribus, aut ullam iste quia, molestias cupiditate doloremque placeat nesciunt animi laboriosam ut asperiores nam quisquam.</p>    </div>
    <div class="col-md-4 col-lg-4">
     @include('inc.sidebar')
    </div>
  </div>
  @endsection