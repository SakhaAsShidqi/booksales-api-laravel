<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Tidak menggunakan view — kembalikan JSON informatif untuk API
        return response()->json([
            'status'  => 'ok',
            'message' => 'Dashboard tidak tersedia. Gunakan endpoint API di /api/*'
        ], 200);
    }
}