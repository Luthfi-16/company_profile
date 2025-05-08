@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-xl-12 grid-margin stretch-card flex-column">
      <div class="card">
      <div class="card-body">
        <h4 class="card-title">Menampilkan Data</h4>
        <p class="card-description">
          Menampilkan Data Dosen
        </p>
        <form  role="form" action="{{ route('dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
          @csrf
          @method('put')
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Dosen</label>
            <div class="col-sm-9">
              <input type="text" name="nama_dosen" class="form-control" id="exampleInputUsername2" placeholder="Nama Dosen" value="{{ $dosen->nama_dosen }}" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nomor Telepon</label>
            <div class="col-sm-9">
              <input type="text" name="telepon" class="form-control" id="exampleInputEmail2" placeholder="Telepon"  value="{{ $dosen->telepon }}" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" name="email" class="form-control" id="exampleInputMobile" placeholder="Email"  value="{{ $dosen->email }}" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Jabatan</label>
              <div class="col-sm-9">
                  <input type="text" name="email" class="form-control" id="exampleInputMobile" placeholder="Email"  value="{{ $dosen->jabatan }}" disabled>
              </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-9">
              <img src="{{ asset('storage/dosen/'.$dosen->foto) }}" alt="" style="width: 100px; height: 100px;">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
              <input type="text" name="status" class="form-control" id="exampleInputConfirmPassword2" placeholder="Status" value="{{ $dosen->status}}" disabled>
            </div>
          </div>
          <a href="{{ route ('dosen.index')}}" class="btn btn-info mr-2">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection