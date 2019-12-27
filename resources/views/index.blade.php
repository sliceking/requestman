@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Items</h1>
  @if (count($items) > 0)
  <ul class="list-group">
    @foreach ($items as $item)
      <li class="list-group-item">
        <h2>{{ $item->text }}</h2>
        <span>{{ $item->body }}</span>
        <small class="float-right">{{ $item->created_at }}</small>
      </li>
    @endforeach
  </ul>

  @else
    <p>No Items</p>
  @endif
</div>
@endsection
