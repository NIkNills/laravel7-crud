@extends('layouts.app')

@section('title', 'Домашняя страница')

@section('content')
    <div class="home d-flex align-items-center">
        <div class="container">
            <h1 class="text-success">Мое первое CRUD приложение!</h1>
            <a href="{{ route('tasks.index') }}" class="btn btn-success">Жми сюда</a>
        </div>
    </div>

@endsection
