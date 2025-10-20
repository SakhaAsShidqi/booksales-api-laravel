<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public $timestamps = false;

    public static function getAllAuthors()
    {
        return [
            (object)['id' => 101, 'nama' => 'Andrea Hirata', 'negara' => 'Indonesia', 'tahun_lahir' => 1967],
            (object)['id' => 102, 'nama' => 'J.K. Rowling', 'negara' => 'Inggris', 'tahun_lahir' => 1965],
            (object)['id' => 103, 'nama' => 'Agatha Christie', 'negara' => 'Inggris', 'tahun_lahir' => 1890],
            (object)['id' => 104, 'nama' => 'Haruki Murakami', 'negara' => 'Jepang', 'tahun_lahir' => 1949],
            (object)['id' => 105, 'nama' => 'Tere Liye', 'negara' => 'Indonesia', 'tahun_lahir' => 1979],
        ];
    }
}