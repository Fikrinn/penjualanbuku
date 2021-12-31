@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Detail Penjualan</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Detail Penjualan</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Rekening</label>
                            <input type="text" name="nama_rek" value="{{ $penjualan->nama_rek }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">No Rekening</label>
                            <input type="text" name="no_rek" value="{{ $penjualan->no_rek }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Total Buku</label>
                            <input type="text" name="total_buku" value="{{ $penjualan->total_buku }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Bank</label>
                            <input type="text" name="bank" value="{{ $penjualan->bank }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Total Harga</label>
                            <input type="text" name="total_harga" value="{{ $penjualan->total_harga }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('/penjualan') }}" class="btn btn-block btn-outline-primary">Kembali Ke
                                Tampilan
                                Awal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
