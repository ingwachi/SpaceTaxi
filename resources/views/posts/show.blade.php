@extends('layouts.master')

@section('content')
    <h1>{{ $post->title }}</h1>
    <div>
        {{ $post->created_at }} Since [{{ $post->created_at->diffForHumans() }}]
    </div>
    <div>
        {{ $post->detail }}
    </div>
@endsection
