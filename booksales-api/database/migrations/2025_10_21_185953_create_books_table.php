<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); 
            $table->string('judul', 255);
            $table->string('isbn', 20)->unique()->nullable();
            $table->text('sinopsis')->nullable();
            $table->integer('tahun_terbit');
            $table->string('genre', 100);
        
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};