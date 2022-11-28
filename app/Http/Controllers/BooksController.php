<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories;

class BooksController extends Controller
{
    public function displayAllBooks(books $books)
    {
        $booksData = $books::all();
        $categoriesData = categories::all();
        return view('book', [
            'books_data' => $booksData,
            'categories_data' => $categoriesData
        ]);
    }

    public function displayDetailBook($id){
        $booksData = books::where('id', $id)->first();
        $publisherData = $booksData->publishers;
        $categoriesData = categories::all();
        return view('booksDetail', [
            'booksData' => $booksData,
            'publisherData' => $publisherData,
            'categories_data' => $categoriesData
        ]);
    }
}
