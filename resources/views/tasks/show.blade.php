@extends('layouts.app')

@section('title', 'Простмотор таска.$post->title')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>{{ $task->title }}</h3>
                <p>{{ $task->description }}</p>
                <p>Таск создан: {{ $task->created_at }}</p>
                <p>Таск редактировался: {{ $task->updated_at }}</p>
            </div>
        </div>
    </div>
@endsection
