<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use App\Models\Kategori;
use App\Models\Produk;
use PHPUnit\Framework\TestSize\Known;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all kategori paged by 5
        // $kategori = Kategori::paginate(1);
        // $produk = Produk::with('kategori')->where('kategori_id', '=', 1)->get();
        $produk = Produk::whereKategoriId(1)->get();

        //return view
        return view('kategori.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view create
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriRequest $request)
    {
        //save kategori to database
        Kategori::create($request->all());
        //return redirect to kategori index
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //return view show kategori
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //return view edit kategori
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriRequest $request, Kategori $kategori)
    {
        //update kategori
        $kategori->update($request->all());
        //return redirect to index kategori with success message
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        //
        $kategori->delete();
        //return redirect to index kategori with success message
        return redirect()->route('kategori.index');
    }
}
