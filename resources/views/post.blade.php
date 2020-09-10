@extends('master')

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post['title'] }}</h2>
        <p class="blog-post-meta">{{ $post['created_at'] }}<a href="#">Mark</a></p>
        {!! $post['description'] !!}
    </div>
@stop
