<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; // Pastikan model Buku ada

class FrontController extends Controller
{
    public function book()
    {
        $bukus = Buku::all(); // Ambil semua buku dari database
        return view('front.book', compact('bukus')); // Kirim data ke view
    }
}