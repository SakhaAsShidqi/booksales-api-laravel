<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;


Route::get('/', function () {
    return "<h1>Sistem MVC Genre & Author (Laravel Style)</h1>
            <p>Akses salah satu rute berikut:</p>
            <ul>
                <li><a href='/genre'>/genre (Daftar Genre)</a></li>
                <li><a href='/author'>/author (Daftar Author)</a></li>
            </ul>";
});

Route::get('/genre', [GenreController::class, 'index']);

Route::get('/author', [AuthorController::class, 'index']);