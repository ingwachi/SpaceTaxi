@extends('layouts.master')

@section('content')

    <h1>Create new Post</h1>

{{--    @if($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="detail">Detail</label>
            <textarea name="detail" id="detail" cols="30" rows="10" class="form-control @error('detail') is-invalid @enderror">{{ old('detail') }}</textarea>
            @error('detail')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Create New Post</button>
    </form>

@endsection
