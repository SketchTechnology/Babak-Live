<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id)
    {
        $book = Book::findOrFail($id);
        $filePath = public_path("books/{$book->file_path}");

        return response()->download($filePath, "{$book->title}.pdf");
    }
}
