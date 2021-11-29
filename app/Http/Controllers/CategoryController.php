<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use App\Models\Detail;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function index($id)
    {
        $categories = Category::get();
        $category = Category::where('id', $id)->first();
        return view('category', compact('categories', 'category'));
    }

    public function categories()
    {
        $categories = Category::get();
        return view('contact', compact('categories'));
    }
}
