@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Detail Buku</h1>
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
                    <div class="card-header">Detail Penjualan</div>
                    <div class="card-body">
                        <form action="{{ route('det_penjualan.update', $det_penjualan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Judul Buku</label>
                                <input type="text" name="judul_buku" value="{{ $det_penjualan->judul_buku }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for=""> Harga Buku</label>
                                <input type="text" name="harga" value="{{ $det_penjualan->harga }}" class="form-control"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Rekening</label>
                                <input type="text" name="nama_rek" value="{{ $det_penjualan->nama_rek }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">No Rekening</label>
                                <input type="text" name="no_rek" value="{{ $det_penjualan->no_rek }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Total Buku</label>
                                <input type="text" name="total_buku" value="{{ $det_penjualan->total_buku }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Bank</label>
                                <input type="text" name="bank" value="{{ $det_penjualan->bank }}" class="form-control"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Total Harga</label>
                                <input type="text" name="total_harga" value="{{ $det_penjualan->total_harga }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah" value="{{ $det_penjualan->jumlah }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('det_penjualan.index') }}"
                                    class="btn btn-block btn-outline-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
