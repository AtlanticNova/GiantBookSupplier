<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories;

class CategoriesController extends Controller
{
    public function displayDetailCategory($id){
        $bookData = books::join('book_categories', 'book_categories.book_id', '=', 'books.id')->where('book_categories.category_id', $id)->get(['books.*']);
        $categoryDetailsData = categories::join('book_categories', 'book_categories.category_id', '=','categories.id')->where('book_categories.category_id', $id)->get(['categories.*'])->first();
        $categoriesData = categories::all();

        return view('categories', [
            'bookData' => $bookData,
            'categoryDetails' => $categoryDetailsData,
            'categories_data' => $categoriesData
        ]);
    }

    public function displayContact(){
        $categoriesData = categories::all();
        return view('contact',[
            'categories_data' => $categoriesData
        ]);
    }
}
