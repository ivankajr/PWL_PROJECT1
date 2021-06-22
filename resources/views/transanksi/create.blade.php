@extends('main')

@section('tittle', 'Dokter')

@section('page-wrapper')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Transanksi
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Transanksi</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tambah Data Transanksi
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
        <a href="{{ url('transanksi') }}" class="btn btn-secondary btn-sm">
            <i class="fa fa-undo"></i> Back
            </a>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-lg-6">
     <form method="post" action="{{ url('transanksi') }}" method="post">
    @csrf
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
            <label for="hewan_id">NAMA Hewan</label>
            <select name="hewan_id" class="form-control select2">
                <option value="">- pilih-</option>
                @foreach ($Hewan as $item)
                <option value="{{$item->id}}" {{ old('hewan_id') == "$item->id" ? 'selected' : '' }}>{{$item->nama_hewan}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="pelayanan_id">Nama Pelayanan</label>
            <select name="pelayanan_id" class="form-control select2">
            <option value="">- pilih-</option>
                @foreach ($pelayanan as $item)
                    <option value="{{$item->id}}" {{ old('pelayanan_id') == "$item->id" ? 'selected' : '' }}>{{$item->jenis_pelayanan}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="pelayanan_id">Harga Pelayanan</label>
            <select name="pelayanan_id" class="form-control select2">
            <option value="">- pilih-</option>
                @foreach ($pelayanan as $item)
                    <option value="{{$item->id}}" {{ old('pelayanan_id') == "$item->id" ? 'selected' : '' }}>{{$item->harga}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="obat_id">Nama Obat</label>
            <select name="obat_id" class="form-control select2">
            <option value="">- pilih-</option>
                @foreach ($obat as $item)
                    <option value="{{$item->id}}" {{ old('obat_id') == "$item->id" ? 'selected' : '' }}>{{$item->nama_obat}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="obat_id">Harga Pelayanan</label>
            <select name="obat_id" class="form-control select2">
            <option value="">- pilih-</option>
                @foreach ($obat as $item)
                    <option value="{{$item->id}}" {{ old('obat_id') == "$item->id" ? 'selected' : '' }}>{{$item->harga}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="total">Total Harga</label>
            <input type="number" name="total" class="form-control" id="total" aria-describedby="total" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
                   
    </div>
    </div>
@endsection