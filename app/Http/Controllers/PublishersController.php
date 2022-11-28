<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\publishers;

class PublishersController extends Controller
{
    public function displayAllPublisher(publishers $publishers)
    {
        $publisherData = $publishers::all();
        $categoriesData = categories::all();
        return view('publisher',[
            'publisher_data' => $publisherData,
            'categories_data' => $categoriesData
        ]);
    }

    public function displayPublisherDetail($id){
        $publisherData = publishers::where('id', $id)->first();
        $booksData = $publisherData->books;
        $categoriesData = categories::all();
        return view('publisherDetail', [
            'publisherData'=> $publisherData,
            'booksData' => $booksData,
            'categories_data' => $categoriesData
        ]);
    }
}
