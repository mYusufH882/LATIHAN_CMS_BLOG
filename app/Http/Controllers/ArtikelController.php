<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::where('user_id', auth()->user()->id)->get();

        return view('artikel.index', compact('artikel'));
    }

    public function create()
    {
        $kategori = Kategori::where('user_id', auth()->user()->id)->get();

        return view('artikel.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|max:150',
            'id_kategori' => 'required',
            'isi' => 'required',
            'user_id' => 'required'
        ], ['required' => ':attribute harus diisi !!!']);

        Artikel::create($data);

        return redirect()->route('artikel.index')->with('success', 'Data Berhasil Disimpan !!!');
    }

    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $kategori = Kategori::where('user_id', auth()->user()->id)->get();

        return view('artikel.edit', compact('artikel', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => 'required|max:150',
            'id_kategori' => 'required',
            'isi' => 'required'
        ], ['required' => ':attribute harus diisi !!!']);

        Artikel::where('id', $id)->update($data);

        return redirect()->route('artikel.index')->with('success', 'Data Berhasil Diubah !!!');
    }

    public function destroy($id)
    {
        Artikel::where('id', $id)->delete();

        return redirect()->route('artikel.index')->with('success', 'Data Berhasil Dihapus !!!');
    }
}
