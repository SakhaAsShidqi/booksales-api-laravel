<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    /**
     * Menampilkan daftar semua buku dengan data penulis.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $books = Book::with('author')->get();

            return response()->json([
                'status' => 'success',
                'message' => 'Data buku berhasil diambil',
                'data' => $books
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal mengambil data buku',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Menampilkan detail buku.
     *
     * @param Book $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Book $book): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'data' => $book
        ], 200);
    }
}