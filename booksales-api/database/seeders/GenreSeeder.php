<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            ['name' => 'Fiksi', 'description' => 'Karya imajinatif atau naratif'],
            ['name' => 'Non-Fiksi', 'description' => 'Karya berbasis fakta dan informasi'],
            ['name' => 'Fantasi', 'description' => 'Cerita dengan elemen magis dan dunia imajinatif'],
            ['name' => 'Misteri', 'description' => 'Cerita penuh teka-teki dan penyelidikan'],
        ];

        foreach ($genres as $g) {
            Genre::firstOrCreate(['name' => $g['name']], $g);
        }
    }
}