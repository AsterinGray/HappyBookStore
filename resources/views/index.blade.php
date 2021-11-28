@extends('layout')
@section('heading', "Book List")
@section('main')
    <table class="table">
        <thead>
        <tr class="table-dark color-light">
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td><a href="/book/{{$book->id}}">{{$book->title}}</a></td>
                    <td>{{$book->detail->author}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection