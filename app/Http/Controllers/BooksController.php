<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Class BooksController
 * @package App\Http\Controllers
 */
class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     * GET /books
     * @return array
     */
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    /**
     * GET /books/{id}
     * @param integer $id
     * @return mixed
     * */
    public function show($id)
    {
        try {
            return Book::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Book not found'
                ]
            ], 404);
        }
    }
    //
}
