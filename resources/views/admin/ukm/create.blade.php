@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-12 grid-margin stretch-card flex-column">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data UKM</h4>
                <p class="card-description">
                Untuk Menambah Data UKM
                </p>
                <form class="form-sample" role="form" action="{{ route('ukm.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama UKM</label>
                    <div class="col-sm-9">
                    <input type="text" name="nama_ukm" class="form-control @error('nama_ukm') is-invalid @enderror" id="exampleInputUsername2" placeholder="Nama UKM">
                    @error('nama_fasilitas')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Deskripsi UKM</label>
                    <div class="col-sm-9">
                        <textarea class="form-control @error('desk') is-invalid @enderror" name="desk" id="ukm" rows="5" placeholder="Deskripsi UKM"></textarea>
                        @error('desk')
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