<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['nama' => 'Andrea Hirata', 'negara' => 'Indonesia', 'tahun_lahir' => 1967],
            ['nama' => 'Pramoedya Ananta Toer', 'negara' => 'Indonesia', 'tahun_lahir' => 1925],
            ['nama' => 'Agatha Christie', 'negara' => 'United Kingdom', 'tahun_lahir' => 1890],
            ['nama' => 'J.K. Rowling', 'negara' => 'United Kingdom', 'tahun_lahir' => 1965],
        ];

        foreach ($authors as $a) {
            Author::firstOrCreate(['nama' => $a['nama']], $a);
        }
    }
}