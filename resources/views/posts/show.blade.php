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
    <div class="row">
        <div class="col-2">
            <a class="btn btn-info" style="margin-bottom: 3%" href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit This Post</a>
        </div>
        <div class="col-2">
            <form id="deleteForm" onsubmit="return confirm('Are you sure to delete this post?')"
                  action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Delete Post</button>
            </form>
        </div>
    </div>
@endsection
