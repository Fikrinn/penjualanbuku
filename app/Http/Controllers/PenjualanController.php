<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = penjualan::all();
        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_rek' => 'required',
            'no_rek' => 'required',
            'total_buku' => 'required',
            'bank' => 'required',
            'total_harga' => 'required',
        ]);

        $penjualan = new penjualan;
        $penjualan->nama_rek = $request->nama_rek;
        $penjualan->no_rek = $request->no_rek;
        $penjualan->total_buku = $request->total_buku;
        $penjualan->bank = $request->bank;
        $penjualan->total_harga = $request->total_harga;
        $penjualan->save();
        return redirect()->route('penjualan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penjualan = penjualan::findOrFail($id);
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualan = penjualan::findOrFail($id);
        return view('penjualan.edit', compact('penjualan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_rek' => 'required',
            'no_rek' => 'required',
            'total_buku' => 'required',
            'bank' => 'required',
            'total_harga' => 'required',
        ]);

        $penjualan = new penjualan;
        $penjualan->nama_rek = $request->nama_rek;
        $penjualan->no_rek = $request->no_rek;
        $penjualan->total_buku = $request->total_buku;
        $penjualan->bank = $request->bank;
        $penjualan->total_harga = $request->total_harga;
        $penjualan->save();
        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = penjualan::findOrFail($id);
        $penjualan->delete();
        return redirect()->route('penjualan.index');
    }
}
