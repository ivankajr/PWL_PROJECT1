@extends('main')

@section('tittle', 'pemilik')

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
            Detail Pemilik
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID: </b>{{$pemilik->id}}</li>
                <li class="list-group-item"><b>Nama Pemilik: </b>{{$pemilik->nama_pemilik}}</li>
                <li class="list-group-item"><b>Nama Pemilik: </b>{{$pemilik->jenis_kelamin}}</li>
                <li class="list-group-item"><b>Nama Pemilik: </b>{{$pemilik->alamat}}</li>
                <li class="list-group-item"><b>Nama Pemilik: </b>{{$pemilik->no_telp}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt-3" href="{{ url('pemilik') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection