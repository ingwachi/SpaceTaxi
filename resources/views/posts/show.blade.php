@extends('layouts.master')

@section('content')
    <h1>{{ $post->title }}</h1>
    <div>
        {{ $post->created_at }} Since [{{ $post->created_at->diffForHumans() }}]
    </div>
    <div>
        {{ $post->detail }}
    </div>
    <hr>
    <a class="btn btn-info" style="margin-bottom: 3%" href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit This Post</a>
    <form id="deleteForm" onsubmit="return confirm('Are you sure to delete this post?')"
          action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit">DELETE</button>
    </form>
@endsection
