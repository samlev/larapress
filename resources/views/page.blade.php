@extends('layouts.app')

@section('content')
  @if(isset($post))
    <h1>{{ $post->title }}</h1>
    <div class="post-body">{!! $post->content !!}</div>
  @endif
@endsection
