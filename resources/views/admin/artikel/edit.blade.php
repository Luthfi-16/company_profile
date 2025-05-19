@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-xl-12 grid-margin stretch-card flex-column">
      <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Data</h4>
        <p class="card-description">
          Untuk Mengedit Data Artikel
        </p>
        <form  role="form" action="{{route ('artikel.update', $artikel->id)}}" method="POST" enctype="multipart/form-data" class="forms-sample">
          @csrf
          @method('put')
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-9">
              <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputUsername2" placeholder="Judul" value="{{ $artikel->judul }}">
              @error('judul')
                  <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal Artikel</label>
            <div class="col-sm-9">
              <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="exampleInputUsername2" placeholder="Tanggal Artikel" value="{{ $artikel->tanggal}}">
              @error('tanggal')
                  <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Isi</label>
            <div class="col-sm-9">
              <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" id="isi" rows="5">{{$artikel->isi}}</textarea>
              @error('isi')
                  <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-9"><img src="{{ asset('storage/artikel/' . $artikel->foto) }}" style="border-radius: 0; width: 100px; height: 50px; margin-bottom: 10px;"/>
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