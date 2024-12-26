@extends('layouts.app')

@section('title', $event->title)

@section('content')
    <div class="container mt-4">
        <h1>{{ $event->title }}</h1>
        <p>{{ $event->show_date->format('d.m.Y H:i') }}</p>
        <div class="content">
            <p>{{ $event->description }}</p>
        </div>
    </div>
@endsection
