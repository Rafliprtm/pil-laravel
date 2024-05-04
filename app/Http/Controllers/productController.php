<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function index()
    {
        //Halaman Product
        return view('product.product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // halaman tambah
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            //  halaman simpan tambah
        $data =[
            'kode_produk' => $request->kode_produk,
            'nama_produk' =>$request->nama_produk,
            'jenis_produk' =>$request->jenis_produk,
            'harga' =>$request->harga
        ];
        produk::create($data);
        return redirect('produk');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}