@extends('layouts.app')

@section('title', 'Простмотор таска.$post->title')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->description }}</p>
            </div>
        </div>
    </div>
@endsection
