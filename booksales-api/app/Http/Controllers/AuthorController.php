<?php
namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        // Ambil semua data author dari database
        $authors = Author::all(); 
        return view('author.index', compact('authors'));
    }
}