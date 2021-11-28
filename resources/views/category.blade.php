@extends('layout')
@section('heading', $category->category)
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
            @if (count($category->books) > 0)
                @foreach ($category->books as $book)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td><a href="/book/{{$book->id}}">{{$book->title}}</a></td>
                        <td>{{$book->detail->author}}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>No Data Found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection