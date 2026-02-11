<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
{
    $books = \App\Models\Book::latest()->get();
    return view('books.index', compact('books'));
}

public function favorite(\App\Models\Book $book)
{
    $book->update([
        'is_favorite' => ! $book->is_favorite
    ]);

    return back();
}

}
