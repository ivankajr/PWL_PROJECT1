@extends('main')

@section('tittle', 'Hewan')

@section('page-wrapper')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Transanksi
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Transanksi</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
@endsection

@section('content')
<div class="card">
<div class="card-header">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <!-- <div class="pull-left">
        <strong>Data Dokter</strong>
    </div> -->
    <div class="pull-right">
        <a href="{{ url('transanksi/create') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Add
        </a>
    </div>
    <div class="pull-right">
        <a href="{{ url('transanksi/cetak_data') }}" class="btn btn-danger btn-sm">
            <i class="fa fa-print"></i> Cetak
        </a>
    </div>
    <div class="card-body table-responsive">
    <div class="row">
                    <div class="col-lg-6">
                        <h2>Data Transanksi</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pemilik</th>
                                        <th>Nama Hewan</th>
                                        <th>Nama Pelayanan</th>
                                        <th>Harga Pelayanan</th>
                                        <th>Obat</th>
                                        <th>Harga Obat</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($transanksi as $item)
                                   <tr>
                                   <td>{{ $item->id }}</td>
                                   <td>{{ $item->pemilik->nama_pemilik }}</td>
                                   <td>{{ $item->hewan->nama_hewan }}</td>
                                   <td>{{ $item->pelayanan->jenis_pelayanan }}</td>
                                   <td>{{ $item->pelayanan->harga }}</td>
                                   <td>{{ $item->obat->nama_obat }}</td>
                                   <td>{{ $item->obat->harga }}</td>
                                   <td>{{ $item->total  }}</td>
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