@extends('layouts.app')

@section('title', 'Все таски')

@section('content')
    <div class="container">
        <a href="{{ route('tasks.create') }}" class="btn btn-success">Создать таск</a>

        @if(session()->get('success'))
            <div class="alert alert-success mt-3">
                {{ session()->get('success') }}
            </div>
        @endif

        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col">Создан</th>
                <th scope="col">Редактировался</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>{{ $task->updated_at }}</td>
                    <td class="table-buttons">
                        <a href="{{ route('tasks.show', $task) }}" class="btn btn-success">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
