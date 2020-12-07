@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <h1>All posts by {{ $author->user_nicename }}</h1>

  @if ($posts->count())
    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <div class="post-body">{!! $post->content !!}</div>
    @endforeach
  @else
    This author has no public posts
  @endif
@endsection