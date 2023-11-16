<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    public function store()
    {
        $books = Book::create(request()->all());
        return response()->json($books);
    }

    public function show(Book $book)
    {
        return response()->json($book);
    }

    public function update(Book $book)
    {
        $book->update(request()->all());
        return response()->json($book);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(["message" => "Successfully deleted book"], 204);
    }
}
