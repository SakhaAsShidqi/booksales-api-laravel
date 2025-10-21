<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['nama' => 'Andrea Hirata', 'negara' => 'Indonesia', 'tahun_lahir' => 1967, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'J.K. Rowling', 'negara' => 'Inggris', 'tahun_lahir' => 1965, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Agatha Christie', 'negara' => 'Inggris', 'tahun_lahir' => 1890, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Haruki Murakami', 'negara' => 'Jepang', 'tahun_lahir' => 1949, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Tere Liye', 'negara' => 'Indonesia', 'tahun_lahir' => 1979, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}