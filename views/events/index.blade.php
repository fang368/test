@extends('layouts.app')

@section('title', 'Все мероприятия')

@section('content')
    <h1 class="text-center">Все мероприятия</h1>

    <div class="row">
        @foreach($events as $event)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ $event->image }}" class="card-img-top" alt="{{ $event->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                        <a href="{{ route('events.show', $event) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $events->links() }}
    </div>
@endsection
