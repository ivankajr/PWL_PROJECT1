@extends('main')

@section('tittle', 'Pelayanan')

@section('page-wrapper')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Pelayanan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Pelayanan</a>
                            <li class="active">
                                <i class="fa fa-table"></i> Tambah Data Pelayanan
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
        <a href="{{ url('pelayanan') }}" class="btn btn-secondary btn-sm">
            <i class="fa fa-undo"></i> Back
            </a>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-lg-6">
     <form method="post" action="{{ url('pelayanan') }}" method="post">
    @csrf
    <div class="form-group">
            <label for="jenis_pelayanan">Jenis Pelayanan</label>
            <input type="text" name="jenis_pelayanan" class="form-control" id="jenis_pelayanan" aria-describedby="jenis_pelayanan" >
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" class="form-control" id="harga" aria-describedby="harga" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
                   
    </div>
    </div>
@endsection