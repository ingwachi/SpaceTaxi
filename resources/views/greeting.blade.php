@extends('layouts.master')

@section('style')

    <style>
        h1 {
            color: orange;
        }
    </style>

@endsection

@section('content')

    <h1>Hello, {{ $message }}</h1>

    

@endsection
