@extends('layouts.app')

@section('title', $newsItem->title)

@section('content')
    <div class="container mt-4">
        <h1>{{ $newsItem->title }}</h1>
        <p>{{ $newsItem->created_at->format('d.m.Y') }}</p>
        <div class="content">
            <p>{{ $newsItem->description }}</p>
        </div>
    </div>
@endsection
