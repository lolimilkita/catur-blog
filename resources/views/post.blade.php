@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h2>

    {!! $post->body !!}

    <a href="/posts">Back to post</a>

@endsection