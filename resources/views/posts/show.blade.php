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

    <h1>{{ $post->comments->count() }} Comment(s)</h1>

    <form action="{{ route('posts.comment.store', ['post' => $post->id]) }}" method="POST">
        @csrf
        <div style="margin-bottom: 3%">
            <label for="comment_detail">
            @if($post->comments->isEmpty())
                Be the first to comment this post
            @else
                    Write your comment to this post
            @endif
            </label>
            <textarea type="text"  name="detail" class="form-control" cols="30" rows="5"></textarea>
        </div>
        <button class="btn btn-primary" type="submit" style="margin-bottom: 3%">Comment this post</button>
    </form>

    <div style="margin-bottom: 5%">
    @foreach($post->comments->sortByDesc('id') as $comment)
        <div>
            [{{ $comment->created_at->diffForHumans() }}]
            {{ $comment->detail }}
        </div>
    @endforeach
    </div>
@endsection
