@extends('main')

@section('tittle', 'Obat')

@section('page-wrapper')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Obat
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Obat</a>
                            <li class="active">
                                <i class="fa fa-table"></i> Tambah Data Obat
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
        <a href="{{ url('obat') }}" class="btn btn-secondary btn-sm">
            <i class="fa fa-undo"></i> Back
            </a>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-lg-6">
     <form method="post" action="{{ url('obat') }}" method="post">
    @csrf
    <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" id="nama_obat" aria-describedby="nama_obat" >
        </div>
        <div class="form-group">
            <label for="image">Foto: </label>
            <input type="file" class="form-control" required="required" name="image">
        </div>
        <div class="form-group">
            <label for="jenis_obat">Jenis Obat</label>
            <input type="text" name="jenis_obat" class="form-control" id="jenis_obat" aria-describedby="jenis_obat" >
        </div>
        <div class="form-group">
            <label for="stock">Stock Obat</label>
            <input type="number" name="stock" class="form-control" id="stock" aria-describedby="stock" >
        </div>
        <div class="form-group">
            <label for="harga">Harga Obat</label>
            <input type="number" name="harga" class="form-control" id="harga" aria-describedby="harga" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
                   
    </div>
    </div>
@endsection