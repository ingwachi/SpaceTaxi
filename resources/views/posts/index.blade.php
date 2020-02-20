@extends('layouts.master')

@section('content')
    <h1>All Posts</h1>

    @foreach($posts as $post)
        <div>
            <div class="title">
                <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                    {{ $post->title }}
                </a>
                [{{ $post->created_at->diffForHumans() }}]
            </div>
            <p>
                {{ $post->detail }}
            </p>
        </div>
        <hr>
    @endforeach

@endsection
