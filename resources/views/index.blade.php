@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Items</h1>
  @if (count($items) > 0)
  <ul class="list-group">
    @foreach ($items as $item)
    <a href="/request/{{ $item->id }}/edit" class="list-group-item list-group-item-action">
      <form action="/request/{{ $item->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger float-right">Delete</button>
      </form>
      <h2>{{ $item->text }}</h2>
      <span>{{ $item->body }}</span>
      <small class="float-right">{{ $item->created_at }}</small>
    </a>
    @endforeach
  </ul>

  @else
    <p>No Items</p>
  @endif
</div>
@endsection
