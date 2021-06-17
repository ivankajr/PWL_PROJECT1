@extends('main')

@section('tittle', 'Obat')

@section('page-wrapper')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            obat
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Jenis obat</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Edit Data Obat
                            </li>
                        </ol>
                    </div>
                </div>
@endsection

@section('content')
<div class="card">
<div class="card-header">

    <div class="pull-right">
        <a href="{{ url('pelayanan') }}" class="btn btn-secondary btn-sm">
            <i class="fa fa-undo"></i> Back
            </a>
    </div>
    </div>
    <div class="card-body">
    <div class="row">
                    <div class="col-lg-6">
                    <form method="post" action="{{ url('pelayanan/'.$pelayanan->id) }}" id="myForm" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <div class="form-group">
                <label for="jenis_pelayanan">Jenis Pelayanan</label>
                <input type="text" name="jenis_pelayanan" class="form-control" id="jenis_pelayanan" value="{{ $pelayanan->jenis_pelayanan }}" ariadescribedby="nama_obat" >
            </div>
            <div class="form-group">
                <label for="harga">Harga Pelayanan</label>
                <input type="text" name="harga" class="form-control" id="harga" value="{{ $pelayanan->harga }}" ariadescribedby="harga" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
                   
    </div>
    </div>
@endsection