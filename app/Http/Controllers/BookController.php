<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::simplepaginate(5);
        $categories = Category::get();
        return view('index', compact('books', 'categories'));
    }

    public function detail($id)
    {
        $book = Book::find($id);
        $categories = Category::get();
        return view('detail', compact('book', 'categories'));
    }
}
