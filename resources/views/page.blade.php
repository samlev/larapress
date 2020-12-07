@extends('layouts.app')

@section('content')
  @if(isset($post))
    <h2>{{ $post->title }}</h2>
    <div class="post-body">{!! $post->content !!}</div>
  @endif
@endsection
