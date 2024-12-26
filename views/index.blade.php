@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <div class="container">
        <h1 class="text-center my-5">Добро пожаловать в Башкирский театр оперы и балета</h1>

        <!-- Секция событий -->
        <section class="events-section mb-5">
            <h2 class="text-center mb-4">События</h2>
            @if($events->isNotEmpty())
                <div class="row">
                    @foreach($events as $event)
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm border-light rounded">
                                @if($event->image)
                                    <img src="{{ asset('storage/'.$event->image) }}" class="card-img-top" alt="{{ $event->title }}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event->title }}</h5>
                                    <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                                    <a href="{{ route('events.show', $event) }}" class="btn btn-primary w-100">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">Нет доступных событий для отображения.</p>
            @endif
        </section>

        <!-- Секция новостей -->
        <section class="news-section">
            <h2 class="text-center mb-4">Новости</h2>
            @if($news->isNotEmpty())
                <div class="row">
                    @foreach($news as $new)
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm border-light rounded">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $new->title }}</h5>
                                    <p class="card-text">{{ Str::limit($new->description, 100) }}</p>
                                    <a href="{{ route('news.show', $new) }}" class="btn btn-primary w-100">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">Нет доступных новостей для отображения.</p>
            @endif
        </section>
    </div>
@endsection
