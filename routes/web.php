<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PublishersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BooksController::class, 'displayAllBooks']);
Route::get('/book/{id}',[BooksController::class, 'displayDetailBook']);
Route::get('/category/{id}', [CategoriesController::class, 'displayDetailCategory']);
Route::get('/publisher', [PublishersController::class, 'displayAllPublisher']);
Route::get('/publisher/{id}', [PublishersController::class, 'displayPublisherDetail']);
Route::get('/contact', [CategoriesController::class, 'displayContact']);
