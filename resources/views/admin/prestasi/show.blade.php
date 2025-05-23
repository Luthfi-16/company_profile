@extends('layouts.admin')
@section('content')
<div class="row">
<div class="col-xl-12 grid-margin stretch-card flex-column">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Prestasi</h4>
            <p class="card-description">
            Untuk Menambah Data Prestasi
            </p>
            <form class="form-sample" role="form" action="{{ route('prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
            @csrf
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Prestasi</label>
                <div class="col-sm-9">
                    <input type="text" name="nama_prestasi" class="form-control @error('nama_prestasi') is-invalid @enderror" id="exampleInputUsername2" placeholder="Nama prestasi" value="{{ $prestasi->nama_prestasi }}" disabled>
                    @error('nama_prestasi')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Deskripsi Prestasi</label>
                <div class="col-sm-9">
                    <textarea class="form-control @error('desk') is-invalid @enderror" name="desk" id="" disabled rows="5" placeholder="Deskripsi Prestasi">{{ $prestasi->desk }}</textarea>
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
                        <img src="{{ asset('storage/prestasi/'.$prestasi->foto) }}" alt="" style="width: 100px; height: 100px; margin-bottom: 5px;">
                    @error('foto')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>
            </div>
            <a href="{{route ('prestasi.index')}}" type="submit" class="btn btn-info mr-2">Kembali</a>
            </form>
            </div>
        </div>
    </div>
</div>    
@endsection