@extends('layouts.app')

@section('title', 'Редактировать новость')

@section('content')
    <h1 class="text-center">Редактировать новость</h1>

    <form action="{{ route('admin.updateNews', $news->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $news->title) }}" required>
    </div>

    <div class="form-group">
        <label for="description">Содержание</label>
        <textarea name="description" class="form-control" required>{{ old('description', $news->description) }}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Изображение</label>
        <input type="file" name="image" id="image" class="form-control">
        @if($news->image)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $news->image) }}" alt="Image" width="100">
            </div>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
    <a href="{{ route('admin.index') }}" class="btn btn-secondary">Назад</a>
</form>
@endsection