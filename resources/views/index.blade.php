@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if ($posts->count())
    @foreach ($posts as $post)
      <h2><a href="{{ $post->url }}">{{ $post->title }}</a></h2>
      <div class="post-body">{!! $post->post_excerpt ?: wp_trim_excerpt($post->post_content) !!}</div>
    @endforeach
  @else
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'larapress') }}
    </div>
  @endif
@endsection
