@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <h2>All posts by {{ $author->user_nicename }}</h2>

  @if ($posts->count())
    @foreach ($posts as $post)
      <h3><a href="{{ $post->url }}">{{ $post->title }}</a></h3>
      <div class="post-body">{!! $post->post_excerpt ?: wp_trim_excerpt($post->post_content) !!}</div>
    @endforeach
  @else
    This author has no public posts
  @endif
@endsection