@extends('layouts.master')


@section('content')

<div class="col-md-8 blog-main">

    <h1>Create a Post</h1>

  <form method="post" action="/posts">
      @csrf

      <input type="hidden" name="user_id" value="1" >

    <div class="form-group">

      <label for="title">Title</label>

      <input type="input" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Title here">

      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

    </div>

    <div class="form-group">

      <label for="exampleTextarea">Body</label>

      <textarea class="form-control" name="body" id="exampleTextarea" rows="3"></textarea>

    </div>

    <div class="form-group">

      <button type="submit" class="btn btn-primary">Submit</button>

    </div>

    @include ('layouts.errors');

  </form>

  </div>


@endsection
