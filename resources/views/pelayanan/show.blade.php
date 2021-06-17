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
            Detail Pelayanan
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID: </b>{{$pelayanan->id}}</li>
                <li class="list-group-item"><b>Jenis Pelayanan: </b>{{$pelayanan->jenis_pelayanan}}</li>
                <li class="list-group-item"><b>Harga Pelayanan: </b>{{$pelayanan->harga}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt-3" href="{{ url('pelayanan') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection