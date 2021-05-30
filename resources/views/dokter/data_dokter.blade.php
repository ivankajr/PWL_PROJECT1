@extends('main')

@section('tittle', 'Dokter')

@section('page-wrapper')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dokter
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Dokter</a>
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
        <a href="{{ url('dokter/add') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Add
        </a>
    </div>
    <div class="card-body table-responsive">
    <div class="row">
                    <div class="col-lg-6">
                        <h2>Data Dokter</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dokter</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>No Telp.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($dokter as $item)
                                   <tr>
                                   <td>{{ $item->id_dokter }}</td>
                                   <td>{{ $item->nama_dokter }}</td>
                                   <td>{{ $item->jenis_kelamin }}</td>
                                   <td>{{ $item->alamat }}</td>
                                   <td>{{ $item->no_telp }}</td>
                                   <td class="text-center">
                                        <a href="" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
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