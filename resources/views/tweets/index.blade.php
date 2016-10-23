@extends('layout')

@section('content')
<div class="contents row">
  @foreach($tweets as $tweet)
    <div class="content_post" style="background-image: url({{ $tweet->image }});">
      <p>{{ $tweet->text }}</p>
      <span class="name">{{ $tweet->name }}</span>
    </div>
  @endforeach
</div>
@endsection