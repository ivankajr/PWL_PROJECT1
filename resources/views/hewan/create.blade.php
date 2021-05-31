@extends('main')

@section('tittle', 'Dokter')

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
                                <i class="fa fa-table"></i> Tambah Data Hewan
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
        <a href="{{ url('hewan') }}" class="btn btn-secondary btn-sm">
            <i class="fa fa-undo"></i> Back
            </a>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-lg-6">
     <form method="post" action="{{ url('hewan') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="nama_hewan">NAMA HEWAN</label>
            <input type="text" name="nama_hewan" class="form-control" id="nama_hewan" aria-describedby="nama_hewan" >
        </div>
        <div class="form-group">
            <label for="pemilik_id">NAMA PEMILIK</label>
            <select name="pemilik_id" class="form-control select2">
                <option value="">- pilih-</option>
                @foreach ($pemilik as $item)
                <option value="{{$item->id}}" {{ old('pemilik_id') == "$item->id" ? 'selected' : '' }}>{{$item->nama_pemilik}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jenishewan_id">JENIS HEWAN</label>
            <select name="jenishewan_id" class="form-control select2">
            <option value="">- pilih-</option>
                @foreach ($jenishewan as $item)
                    <option value="{{$item->id}}" {{ old('jenishewan_id') == "$item->id" ? 'selected' : '' }}>{{$item->jenis_hewan}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">JENIS KELAMIN</label>
            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" aria-describedby="jenis_kelamin" >
        </div>
        <div class="form-group">
            <label for="spesies">SPESIES</label>
            <input type="text" name="spesies" class="form-control" id="spesies" aria-describedby="spesies" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
                   
    </div>
    </div>
@endsection