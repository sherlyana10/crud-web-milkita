<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logo = asset('images/logo.png');
        $masuk = ProdukModel::all();
        //dd($masuk);
        return view('produk.index', compact('masuk', 'logo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            $request->validate(['gambar' => 'image|mimes:jpg,png,jpeg|max:2048']);
            $gambarPath = $request->file('gambar')->store('gambar_produk', 'public');
            $validate['gambar'] = $gambarPath;
        }
        
        $gambarPath = $request->file('gambar')->store('gambar_produk', 'public');
        ProdukModel::create($validate);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = ProdukModel::findOrFail($id);
        return view('produk.edit', compact('produk'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd('hello world');
        $validate = $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|string',
            'deskripsi' => 'required|string',
        ]);
        
        $produk = ProdukModel::findOrFail($id);
        
        if ($request->hasFile('gambar')) {
            $request->validate(['gambar' => 'image|mimes:jpg,png,jpeg|max:2048']);
            $gambarPath = $request->file('gambar')->store('gambar_produk', 'public');
            $validate['gambar'] = $gambarPath;
        }
        
        $produk->update($validate);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = ProdukModel::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'data berhasil di hapus!');
    }
}
