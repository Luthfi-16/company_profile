@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-xl-12 grid-margin stretch-card flex-column">
      <div class="card">
      <div class="card-body">
        <h4 class="card-title">Menampilkan Data</h4>
        <p class="card-description">
          Untuk Menampilkan Data Fakultas
        </p>
        <form  role="form" action="" method="POST" enctype="multipart/form-data" class="forms-sample">
          @csrf
          @method('put')
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Fakultas</label>
            <div class="col-sm-9">
              <input type="text" name="judul" class="form-control" id="exampleInputUsername2" placeholder="Judul" value="{{ $fakultas->nama_fakultas }}" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Deskripsi Fakultas</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="isi" id="" rows="5" placeholder="Isi Artikel" disabled>{{$fakultas->desk}}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-9">
              <img src="{{ asset('storage/fakultas/' . $fakultas->foto) }}" style="border-radius: 0; width: 100px; height: 50px; margin-bottom: 10px;"/>
            </div>
          </div>
          <a href="{{route ('fakultas.index')}}" type="submit" class="btn btn-info mr-2">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection