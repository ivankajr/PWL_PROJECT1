@extends('main')

@section('tittle', 'obat')

@section('page-wrapper')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Jenis obat
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Jenis Obat</a>
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
        <strong>Data obat</strong>
    </div> -->
    <div class="pull-right">
        <a href="{{ url('obat/create') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Add
        </a>
    </div>
    <div class="card-body table-responsive">
    <div class="row">
                    <div class="col-lg-6">
                        <h2>Data Jenis obat</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                
                                <tbody>
                                   @foreach ($obat as $obat)
                                   <tr>
                                   <td>{{ $obat->id }}</td>
                                   <td>{{ $obat->nama_obat }}</td>
                                   <td>{{ $obat->jenis_obat }}</td>
                                   <td>{{ $obat->spesies }}</td>
                                   <td>{{ $obat->harga }}</td>
                                   <td class="text-center">
                                        <a href="{{ url('obat/'.$obat->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ url('obat/'.$obat->id.'/edit') }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                            <form action="{{ url('obat/'.$obat->id) }}" method="post" class="d-inline"
                                             onsubmit="return confirm('Yakin hapus data')">
                                   @method('delete')
                                   @csrf
                                   <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </form>
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