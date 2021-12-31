@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Data Detail Penjualan</h1>
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
                    <div class="card-body">
                        <form action="{{ route('det_penjualan.update', $det_penjualan->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Judul Buku</label>
                                <input type="text" name="judul_buku" value="{{ $det_penjualan->judul_buku }}"
                                    class="form-control @error('judul_buku') is-invalid @enderror">
                                @error('judul_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Harga Buku</label>
                                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Rekening</label>
                                <input type="text" name="nama_rek"
                                    class="form-control @error('nama_rek') is-invalid @enderror">
                                @error('nama_rek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan No Rekening</label>
                                <input type="text" name="no_rek" class="form-control @error('no_rek') is-invalid @enderror">
                                @error('no_rek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Total Buku</label>
                                <input type="text" name="total_buku"
                                    class="form-control @error('total_buku') is-invalid @enderror">
                                @error('total_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Bank</label>
                                <input type="text" name="bank" class="form-control @error('bank') is-invalid @enderror">
                                @error('bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Total Harga</label>
                                <input type="text" name="total_harga"
                                    class="form-control @error('total_harga') is-invalid @enderror">
                                @error('total_harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-default">Reset</button>
                                <button type="submit" class="btn btn-default">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
