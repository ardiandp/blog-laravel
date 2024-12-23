@extends('frontend.layout')

@section('title', 'Detail Artikel')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <img src="https://picsum.photos/300/200?random={{ $article->id }}" alt="{{ $article->title }}" class="img-fluid">
        </div>
        <div class="col-md-9">
            <h1 class="text-center">{{ $article->title }}</h1>
            <p class="text-center text-muted">Ditulis oleh {{ $article->user->name }} pada {{ $article->created_at->format('d F Y') }}</p>
            {!! $article->content !!}
        </div>
    </div>
@endsection
