@extends('layouts.master')

@section('content')

    <h1>Edit Post</h1>

    <form method="post" action="{{ route('posts.update', ['post' => $post->id]) }}">
        @method('PUT')
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="detail">Detail</label>
            <textarea name="detail" id="detail" cols="30" rows="10" class="form-control @error('detail') is-invalid @enderror">{{ old('detail', $post->detail) }}</textarea>
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 3%; margin-left: 50%">Update Post</button>
    </form>
@endsection
