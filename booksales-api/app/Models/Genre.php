<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public $timestamps = false;

    public static function getAllGenres() 
    {
        return [
            (object)['id' => 1, 'nama' => 'Fiksi Ilmiah', 'deskripsi' => 'Teknologi dan eksplorasi masa depan.'],
            (object)['id' => 2, 'nama' => 'Fantasi', 'deskripsi' => 'Sihir, mitos, dan dunia imajinatif.'],
            (object)['id' => 3, 'nama' => 'Thriller', 'deskripsi' => 'Membangkitkan ketegangan, kegembiraan, dan antisipasi.'],
            (object)['id' => 4, 'nama' => 'Romansa', 'deskripsi' => 'Fokus pada hubungan emosional dan intim.'],
            (object)['id' => 5, 'nama' => 'Biografi', 'deskripsi' => 'Kisah hidup seseorang yang ditulis oleh orang lain.'],
        ];
    }
}