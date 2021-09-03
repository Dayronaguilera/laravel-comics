@extends('templates.base') <!-- richimiamo il nostro template base perche condiviso (header,footer) -->

@section('title, singleComics')

@section('main')
    @dump($id)
    @dump($comics)
@endsection