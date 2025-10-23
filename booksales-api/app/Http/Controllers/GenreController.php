<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{

    public function index()
    {
        $genres = Genre::all();
        return response()->json(['status' => 'success', 'data' => $genres], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100|unique:genres,nama',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $genre = Genre::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Genre berhasil ditambahkan.',
            'data' => $genre
        ], 201);
    }
}