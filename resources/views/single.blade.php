@extends('layouts.app')

@section('content')
  @if(isset($post))
    <h2>{{ $post->title }}</h2>
    <p><em>By <a href="/author/{{ $post->author->user_nicename }}">{{ $post->author->user_nicename }}</a> on {{ $post->post_date }}</em></p>
    <div class="post-body">{!! $post->content !!}</div>
  @endif
@endsection
