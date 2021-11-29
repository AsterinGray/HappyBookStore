@extends('layout')
@section('heading', "Book List")
@section('main')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>
                        <a 
                            class="text-decoration-none fw-bold text-dark"
                            href="/book/{{$book->id}}"
                        >
                            {{$book->title}}
                        </a>
                    </td>
                    <td>{{$book->detail->author}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$books->links()}}
@endsection