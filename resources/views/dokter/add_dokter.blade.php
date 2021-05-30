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
                                <i class="fa fa-table"></i> Tambah Data
                            </li>
                        </ol>
                    </div>
                </div>
@endsection

@section('content')
<div class="card">
<div class="card-header">
    <!-- <div class="pull-left">
        <strong>Data Dokter</strong>
    </div> -->
    <div class="pull-right">
        <a href="{{ url('dokter') }}" class="btn btn-secondary btn-sm">
            <i class="fa fa-undo"></i> Back
        </a>
    </div>
    <div class="card-body">
    <div class="row">
                    <div class="col-lg-6">
                    <form action="{{ url('dokter') }}" method="post">
                    @csrf
                        <form role="form">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama_dokter" 
                                class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" 
                                class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" 
                                class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="text" name="no_telp" 
                                class="form-control" autofocus required>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
    </div>
    </div>
    </div>
                   
    </div>
    </div>
@endsection