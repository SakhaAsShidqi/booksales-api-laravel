<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return response()->json(['status' => 'success', 'data' => $authors], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'negara' => 'nullable|string|max:50',
            'tahun_lahir' => 'required|integer|digits:4',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422); 
        }

        $author = Author::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Author berhasil ditambahkan.',
            'data' => $author
        ], 201);
    }

    public function show($id)
    {
        $author = Author::find($id);
        if (! $author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        return response()->json($author);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (! $author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        $author->update($validated);

        return response()->json($author);
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        if (! $author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $author->delete();

        return response()->json(['message' => 'Author deleted']);
    }
}