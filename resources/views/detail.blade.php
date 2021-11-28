@extends('layout')
@section('heading', "Book Detail")
@section('main')
    <p>Title: {{$book->title}}</p>
    <p>Author: {{$book->detail->author}}</p>
    <p>Publisher: {{$book->detail->publisher}}</p>
    <p>Year: {{$book->detail->year}}</p>
    <p>Description: <br> {{$book->detail->description}}</p>
@endsection