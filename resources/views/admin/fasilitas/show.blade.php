@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-12 grid-margin stretch-card flex-column">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Fasilitas</h4>
                <p class="card-description">
                Untuk Mengedit Data Fasilitas
                </p>
                <form class="form-sample" role="form" action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Fasilitas</label>
                    <div class="col-sm-9">
                    <input type="text" name="nama_fasilitas" class="form-control" id="exampleInputUsername2" placeholder="Nama Fasilitas" value="{{ $fasilitas->nama_fasilitas }}" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Foto</label>
                    <div class="col-sm-9">
                    <img src="{{ asset('storage/fasilitas/' . $fasilitas->foto) }}" style="border-radius: 0; width: 100px; height: 50px; margin-bottom: 10px;"/>
                    </div>
                </div>
                <a href="{{ route ('fasilitas.index')}}" type="submit" class="btn btn-info mr-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection