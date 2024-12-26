@extends('layouts.app')

@section('title', 'Все новости')

@section('content')
    <h1 class="text-center">Все новости</h1>

    <div class="row">
        @foreach($news as $new)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $new->title }}</h5>
                        <p class="card-text">{{ Str::limit($new->description, 100) }}</p>
                        <a href="{{ route('news.show', $new) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $news->links() }}
    </div>
@endsection
