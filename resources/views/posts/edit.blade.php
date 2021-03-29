@extends('layouts.app')

@section('title', 'Редактировать таск'.$post->title)

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

                <form method="POST" action="{{ route('posts.update', $post) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="post-title">Название</label>
                        <input type="text" name="title"
                               value="{{ $post->title }}" class="form-control" id="post-title">
                    </div>
                    <div class="form-group">
                        <label for="post-description">Описание</label>
                        <textarea name="description" class="form-control" id="post-description" rows="3">{{ $post->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Отредактировать таск</button>
                </form>
            </div>
        </div>
    </div>
@endsection
