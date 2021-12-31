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
                    <div class="card-header">
                        Data Detail Penjualan
                        <a href="{{ route('det_penjualan.create') }}"
                            class="btn btn-sm btn-outline-primary float-right">Tambah
                            Detail Penjualan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Judul Buku</th>
                                        <th>Harga Buku</th>
                                        <th>Nama Rekening</th>
                                        <th>No Rekening</th>
                                        <th>Total Buku</th>
                                        <th>Bank</th>
                                        <th>Total Harga</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($det_penjualan as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->$buku->judul_buku }}</td>
                                            <td>{{ $data->$buku->harga }}</td>
                                            <td>{{ $data->$buku->nama_rek }}</td>
                                            <td>{{ $data->$buku->no_rek }}</td>
                                            <td>{{ $data->$buku->total_buku }}</td>
                                            <td>{{ $data->$buku->bank }}</td>
                                            <td>{{ $data->$buku->total_harga }}</td>
                                            <td>{{ $data->$buku->jumlah }}</td>
                                            <td>
                                                <form action="{{ route('det_penjualan.destroy', $data->id) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('det_penjualan.edit', $data->id) }}"
                                                        class="btn btn-outline-info">Edit</a><br>
                                                    <a href="{{ route('det_penjualan.show', $data->id) }}"
                                                        class="btn btn-outline-warning">Show</a>
                                                    <button type="submit" class="btn btn-outline-danger"
                                                        onclick="return confirm('Apakah anda yakin menghapusnya')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
