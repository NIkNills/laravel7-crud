@extends('layouts.app')

@section('title', 'Редактировать таск'.$task->title)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('tasks.update', $task) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="task-title">Название</label>
                        <input type="text" name="title"
                               value="{{ $task->title }}" class="form-control" id="task-title">
                    </div>
                    <div class="form-group">
                        <label for="task-description">Описание</label>
                        <textarea name="description" class="form-control" id="task-description" rows="3">{{ $task->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Отредактировать таск</button>
                    <a href="/" class="btn btn-danger">Вернуться на домашнюю страницу</a>
                </form>

            </div>
        </div>
    </div>
@endsection
