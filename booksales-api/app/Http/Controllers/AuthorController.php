<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AuthorController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $authors = Author::with('books')->get();

            return response()->json([
                'status' => 'success',
                'message' => 'Data penulis berhasil diambil',
                'data' => $authors
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal mengambil data penulis',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
