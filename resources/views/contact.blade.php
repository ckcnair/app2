@extends('layouts.app')
@section('content')
  <h1>Contact</h1>
   @include('inc.messages')
  <form action="contact/submit" method="post">
    <div class="form-group">
      {{csrf_field()}}
      <label for="name">Name:</label>
      <input type="text" name="name"  class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea name="message" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
@endsection