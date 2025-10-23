<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

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
            'name' => 'required|string|max:255',
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

    public function show($id)
    {
        $genre = Genre::find($id);
        if (! $genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        return response()->json($genre);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        if (! $genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update($validated);

        return response()->json($genre);
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        if (! $genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        $genre->delete();

        return response()->json(['message' => 'Genre deleted']);
    }
}