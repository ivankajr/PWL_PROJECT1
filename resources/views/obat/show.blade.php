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
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Detail obat
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID: </b>{{$obat->id}}</li>
                <li class="list-group-item"><b>Nama Obat: </b>{{$obat->nama_obat}}</li>
                <li class="list-group-item"><b>Jenis Obat: </b>{{$obat->jenis_obat}}</li>
                <li class="list-group-item"><b>Stock Obat: </b>{{$obat->stock}}</li>
                <li class="list-group-item"><b>Harga Obat: </b>{{$obat->stock}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt-3" href="{{ url('obat') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection