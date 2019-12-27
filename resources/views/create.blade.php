@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>Insert new Item</h2>
    <form action="/request/" method="POST">
      @csrf
      <div class="form-group">
          <label for="text">Text</label>
          <input type="text" class="form-control" id="text" name="text" placeholder="Enter text">
      </div>
      <div class="form-group">
          <label for="body">Body</label>
          <input type="text" class="form-control" id="body" name="body" placeholder="Enter body">
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
@endsection
