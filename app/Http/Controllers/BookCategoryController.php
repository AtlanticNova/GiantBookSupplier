<?php

namespace App\Http\Controllers;

use App\Models\book_category;
use App\Models\bookCategory;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book_category  $book_category
     * @return \Illuminate\Http\Response
     */
    public function show(bookCategory $book_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book_category  $book_category
     * @return \Illuminate\Http\Response
     */
    public function edit(bookCategory $book_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book_category  $book_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bookCategory $book_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book_category  $book_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(bookCategory $book_category)
    {
        //
    }
}
