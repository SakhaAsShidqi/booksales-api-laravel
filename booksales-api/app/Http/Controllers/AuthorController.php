<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    
}