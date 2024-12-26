@extends('layouts.app')

@section('title', 'Добавить новость')

@section('content')
    <h1 class="text-center">Добавить новость</h1>

    <form action="{{ route('admin.storeNews') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
    </div>

    <div class="form-group">
        <label for="description">Содержание</label>
        <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Изображение</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
@endsection
