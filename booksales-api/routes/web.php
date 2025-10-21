<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return "<h1>Sistem MVC Book & Author</h1>
            <ul>
                <li><a href='/authors'>Daftar Author</a></li>
                <li><a href='/books'>Daftar Book</a></li>
            </ul>";
});

Route::get('/authors', [AuthorController::class, 'index']);

Route::get('/books', [BookController::class, 'index']);