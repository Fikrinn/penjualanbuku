@extends('adminlte::page')

@section('content_header')
    Produk Penjualan Buku
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTables();
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ _('Dashboard') }}</div>

                    <div class="card-body">
                        datatable
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
