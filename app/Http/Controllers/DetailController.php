<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\StoreDetailRequest;
use App\Http\Requests\UpdateDetailRequest;

class DetailController extends Controller
{
    public function index($id)
    {
        $book = Book::find($id);
        $categories = Category::get();
        return view('detail', compact('book', 'categories'));
    }
}
