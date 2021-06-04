@extends('main')

@section('tittle', 'Pemilik')

@section('page-wrapper')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Pemilik
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Pemilik</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tambah Data Pemilik
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
        <a href="{{ url('pemilik') }}" class="btn btn-secondary btn-sm">
            <i class="fa fa-undo"></i> Back
            </a>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-lg-6">
     <form method="post" action="{{ url('pemilik') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="nama_pemilik">Nama Pemilik</label>
            <input type="text" name="nama_pemilik" class="form-control" id="nama_pemilik" aria-describedby="nama_pemilik" >
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" aria-describedby="jenis_kelamin" >
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" >
        </div>
        <div class="form-group">
            <label for="no_telp">No Telp.</label>
            <input type="text" name="no_telp" class="form-control" id="no_telp" aria-describedby="no_telp" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
                   
    </div>
    </div>
@endsection