@extends('layouts.app')

@section('title', 'Админ панель')

@section('content')
    <h1 class="text-center">Админ панель</h1>

    <div class="mb-4">
        <a href="{{ route('admin.createNews') }}" class="btn btn-success">Добавить новость</a>
    </div>

    <!-- Все мероприятия -->
    <h2>Все мероприятия</h2>
    <div class="row">
        @foreach($events as $event)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ $event->image }}" class="card-img-top" alt="{{ $event->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-text">{{ Str::limit($event->description, 100) }}</p>

                        <form action="{{ route('admin.deleteEvent', $event->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Все новости -->
    <h2>Все новости</h2>
    <div class="row">
        @foreach($news as $newsItem)
        <div class="col-md-4">
            <div class="card mb-4">
                @if($newsItem->image)
                    <img src="{{ asset('storage/' . $newsItem->image) }}" class="card-img-top" alt="{{ $newsItem->title }}">
                @else
                    <img src="default-image.jpg" class="card-img-top" alt="Default Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $newsItem->title }}</h5>
                    <p class="card-text">{{ Str::limit($newsItem->description, 100) }}</p>

                    <a href="{{ route('admin.editNews', $newsItem->id) }}" class="btn btn-warning">Редактировать</a>

                    <form action="{{ route('admin.deleteNews', $newsItem->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
