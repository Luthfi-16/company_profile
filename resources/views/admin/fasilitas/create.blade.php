@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-12 grid-margin stretch-card flex-column">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Fasilitas</h4>
                <p class="card-description">
                Untuk Menambah Data Fasilitas
                </p>
                <form class="form-sample" role="form" action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Fasilitas</label>
                    <div class="col-sm-9">
                    <input type="text" name="nama_fasilitas" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="exampleInputUsername2" placeholder="Nama Fasilitas">
                    @error('nama_fasilitas')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Foto</label>
                    <div class="col-sm-9">
                    <input type="file" name="foto" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" name="foto" class="form-control file-upload-info @error('foto') is-invalid @enderror" disabled placeholder="Unggah Foto">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                        @error('foto')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>    
@endsection