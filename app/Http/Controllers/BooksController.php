<?php

namespace App\Http\Controllers;

use App\Book;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return Book::all();
    }

    //
}
