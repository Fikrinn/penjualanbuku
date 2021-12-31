<?php

namespace App\Http\Controllers;

use App\Models\det_penjualan;
use Illuminate\Http\Request;

class DetPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $det_penjualan = det_penjualan::with('penjualan', 'buku')->get();
        return view('det_penjualan.index', compact('det_penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $det_penjualan = det_penjualan::all();
        return view('det_penjualan.create', compact('det_penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_buku' => 'required',
            'harga_buku' => 'required',
            'id_transaksi' => 'required',
            'jumlah' => 'required',
        ]);

        $det_penjualan = new det_penjualan;
        $det_penjualan->id_buku = $request->id_buku;
        $det_penjualan->harga_buku = $request->harga_buku;
        $det_penjualan->id_transaksi = $request->id_transaksi;
        $det_penjualan->jumlah = $request->jumlah;
        $det_penjualan->save();
        return redirect()->route('det_penjualan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\det_penjualan  $det_penjualan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = buku::findOrFail($id);
        $penjulan = penjualan::all($id);
        return view('det_penjualan.show', compact('buku', 'penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\det_penjualan  $det_penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = buku::findOrFail($id);
        $penjulan = penjualan::all($id);
        return view('det_penjualan.show', compact('buku', 'penjualan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\det_penjualan  $det_penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_buku' => 'required',
            'harga_buku' => 'required',
            'id_transaksi' => 'required',
            'jumlah' => 'required',
        ]);

        $det_penjualan = new det_penjualan;
        $det_penjualan->id_buku = $request->id_buku;
        $det_penjualan->harga_buku = $request->harga_buku;
        $det_penjualan->id_transaksi = $request->id_transaksi;
        $det_penjualan->jumlah = $request->jumlah;
        $det_penjualan->save();
        return redirect()->route('det_penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\det_penjualan  $det_penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $det_penjualan = det_penjualan::findOrFail($id);
        $det_penjualan->delete();
        return redirect()->route('det_penjualan.index');
    }
}
