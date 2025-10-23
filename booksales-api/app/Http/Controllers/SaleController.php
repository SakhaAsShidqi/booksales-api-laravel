<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    // GET /api/sales
    public function index()
    {
        return response()->json([
            'status' => 'ok',
            'data' => [] // ganti dengan model/logic sebenarnya
        ], 200);
    }

    // GET /api/sales/{id}
    public function show($id)
    {
        return response()->json([
            'status' => 'ok',
            'data' => [
                'id' => $id
                // tambahkan detail sale di sini
            ]
        ], 200);
    }

    // POST /api/sales
    public function store(Request $request)
    {
        // contoh validasi minimal
        $validated = $request->validate([
            // sesuaikan aturan sesuai model
            'book_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        // buat logic penyimpanan sebenarnya di sini
        return response()->json([
            'status' => 'created',
            'data' => $validated
        ], 201);
    }
}