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
                <a href="/tasks" class="btn btn-outline-secondary rounded-circle">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
