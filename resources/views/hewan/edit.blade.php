@extends('main')

@section('tittle', 'Hewan')

@section('page-wrapper')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dokter
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Data Hewan</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Edit Data Hewan
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
    </div>
    <div class="card-body">
    <div class="row">
                    <div class="col-lg-6">
                    <form method="post" action="{{ url('hewan/'.$hewan->id) }}" id="myForm" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <div class="form-group">
                <label for="nama_hewan">Nama Hewan</label>
                <input type="text" name="nama_hewan" class="form-control" id="nama_hewan" value="{{ $hewan->nama_hewan }}" ariadescribedby="nama_hewan" >
            </div>
            <div class="form-group">
                <label for="image">Foto</label>
                <input type="file" class="form-control" required="required" name="image" value="{{$hewan->foto}}"></br>
                <img width="150px" src="{{asset('storage/'.$hewan->foto)}}">
            </div>
            <div class="form-group">
                <label for="pemilik_id">Nama Pemilik</label>
                <select name="pemilik_id" class="form-control">
                        <option value="">-pilih-</option>
                        @foreach ($pemilik as $item)
                        <option value="{{$item->id}}" {{ old('pemilik_id') == "$item->id" ? 'selected' : '' }}>{{$item->nama_pemilik}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jenishewan_id">Jenis Hewan</label>
                <select name="jenishewan_id" class="form-control">
                        <option value="">-pilih-</option>
                        @foreach ($jenishewan as $item)
                        <option value="{{$item->id}}" {{ old('jenishewan_id') == "$item->id" ? 'selected' : '' }}>{{$item->jenis_hewan}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jurusan</label>
                <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $hewan->jenis_kelamin }}" ariadescribedby="jenis_kelamin" >
            </div>
            <div class="form-group">
                <label for="spesies">Spesies</label>
                <input type="text" name="spesies" class="form-control" id="spesies" value="{{ $hewan->spesies }}" ariadescribedby="spesies" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
                   
    </div>
    </div>
@endsection