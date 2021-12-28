@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Buku</h1>
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
                        Data Buku
                        <a href="{{ route('buku.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                            Buku</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Judul Buku</th>
                                    <th>Harga</th>
                                    <th>Cover Buku</th>
                                    <th>Keterangan</th>
                                    <th>Kategori</th>
                                    <th>Pengarang Buku</th>
                                    <th>Stok</th>
                                    <th>Tahun Terbit</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($buku as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->judul_buku }}</td>
                                        <td>{{ $data->harga }}</td>
                                        <img src="{{ $data->image() }}" alt="" style="width:150px; height:150px;"
                                            alt="Cover">
                                        <td>{{ $data->Keterangan }}</td>
                                        <td>{{ $data->kategori->nama_kategori }}</td>
                                        <td>{{ $data->pengarang_buku }}</td>
                                        <td>{{ $data->stok }}</td>
                                        <td>{{ $data->tahun_terbit }}</td>
                                        <td>
                                            <form action="{{ route('buku.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('buku.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                {{-- <a href="{{route('admin.show',$data->id)}}" class="btn btn-outline-warning">Show</a> --}}
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapusnya')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
