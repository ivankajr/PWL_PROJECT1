@extends('main')

@section('tittle', 'Hewan')

@section('page-wrapper')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Hewan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Hewan</a>
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
        <a href="{{ url('hewan/create') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Add
        </a>
    </div>
    <div class="card-body table-responsive">
    <div class="row">
                    <div class="col-lg-6">
                        <h2>Data Hewan</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Hewan</th>
                                        <th>Foto</th>
                                        <th>Nama Pemilik</th>
                                        <th>Jenis Hewan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Spesies</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($hewan as $item)
                                   <tr>
                                   <td>{{ $item->id }}</td>
                                   <td>{{ $item->nama_hewan }}</td>
                                   <td>
                                   <img width="100px" src="{{asset('storage/'.$item->foto)}}" alt="image" style="object-fit: cover">
                                   </td>
                                   <td>{{ $item->pemilik->nama_pemilik }}</td>
                                   <td>{{ $item->jenishewan->jenis_hewan }}</td>
                                   <td>{{ $item->jenis_kelamin }}</td>
                                   <td>{{ $item->spesies  }}</td>
                                   <td class="text-center">
                                        <a href="{{ url('hewan/'.$item->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ url('hewan/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                            <form action="{{ url('hewan/'.$item->id) }}" method="post" class="d-inline"
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