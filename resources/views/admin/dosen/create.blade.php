@extends('layouts.admin')
@section('content')
<div class="row">
            <div class="col-xl-12 grid-margin stretch-card flex-column">
                <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data</h4>
                  <p class="card-description">
                    Untuk Menambah Data Dosen
                  </p>
                  <form  role="form" action="{{ route('dosen.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Dosen</label>
                      <div class="col-sm-9">
                        <input type="text" name="nama_dosen" class="form-control  @error('nama_dosen') is-invalid @enderror" id="exampleInputUsername2" placeholder="Nama Dosen">
                        @error('nama_dosen')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nomor Telepon</label>
                      <div class="col-sm-9">
                        <input type="text" name="telepon" class="form-control @error('telepon') is-invalid @enderror" id="exampleInputEmail2" placeholder="Telepon">
                        @error('telepon')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputMobile" placeholder="Email">
                        @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Pilih Jabatan</label>
                        <div class="col-sm-9">
                          <select class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" id="exampleFormControlSelect1">
                            <option value="">Pilih Jabatan</option>
                            <option value="Asisten Ahli">Asisten Ahli</option>
                            <option value="Lektor">Lektor</option>
                            <option value="Lektor Kepala">Lektor Kepala</option>
                            <option value="Profesor">Profesor</option>
                          </select>
                          @error('jabatan')
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
                    <div class="form-group row">
                      <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Pilih Status</label>
                        <div class="col-sm-9">
                          <select class="form-control @error('status') is-invalid @enderror" name="status" id="exampleFormControlSelect1">
                            <option value="">Pilih Status</option>
                            <option value="Tetap">Tetap</option>
                            <option value="Tidak Tetap">Tidak Tetap</option>
                          </select>
                          @error('status')
                              <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection