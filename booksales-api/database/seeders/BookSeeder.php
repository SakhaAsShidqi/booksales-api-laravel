<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'judul' => 'Laskar Pelangi', 
                'isbn' => '9789793062791', 
                'sinopsis' => 'Kisah tentang 10 anak desa.', 
                'tahun_terbit' => 2005, 
                'genre' => 'Fiksi', 
                'author_id' => 1,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'judul' => 'Harry Potter and the Sorcerer\'s Stone', 
                'isbn' => '9780747532742', 
                'sinopsis' => 'Petualangan Harry Potter di Hogwarts.', 
                'tahun_terbit' => 1997, 
                'genre' => 'Fantasi', 
                'author_id' => 2,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'judul' => 'And Then There Were None', 
                'isbn' => '9780007136834', 
                'sinopsis' => 'Sepuluh orang asing terperangkap di pulau terpencil.', 
                'tahun_terbit' => 1939, 
                'genre' => 'Misteri', 
                'author_id' => 3, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'judul' => 'Norwegian Wood', 
                'isbn' => '9780375704027', 
                'sinopsis' => 'Kisah nostalgia tentang kehilangan dan seksualitas.', 
                'tahun_terbit' => 1987, 
                'genre' => 'Romansa', 
                'author_id' => 4, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'judul' => 'Bumi', 
                'isbn' => '9786020301042', 
                'sinopsis' => 'Petualangan fantasi di dunia paralel.', 
                'tahun_terbit' => 2014, 
                'genre' => 'Fantasi', 
                'author_id' => 5,
                'created_at' => now(), 'updated_at' => now()
            ],
        ]);
    }
}