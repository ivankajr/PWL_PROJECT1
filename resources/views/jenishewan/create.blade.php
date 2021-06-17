@extends('main')

@section('tittle', 'Jenis Hewan')

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
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Jenis Hewan</a>
                            <li class="active">
                                <i class="fa fa-table"></i> Tambah Data Jenis Hewan
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
        <a href="{{ url('jenishewan') }}" class="btn btn-secondary btn-sm">
            <i class="fa fa-undo"></i> Back
            </a>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-lg-6">
     <form method="post" action="{{ url('jenishewan') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="jenis_hewan">JENIS HEWAN</label>
            <input type="text" name="jenis_hewan" class="form-control" id="jenis_hewan" aria-describedby="jenis_hewan" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
                   
    </div>
    </div>
@endsection