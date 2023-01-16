<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'DESC')->get();

        return view('landing', compact('artikel'));
    }

    public function detail($id)
    {
        $post = Artikel::find($id);
        $kategori = Kategori::get();

        return view('detail', compact('post', 'kategori'));
    }
}
