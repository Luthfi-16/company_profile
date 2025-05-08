@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-12 grid-margin stretch-card flex-column">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Melihat Data UKM</h4>
                <p class="card-description">
                    Untuk Melihat Data UKM
                </p>
                <form class="form-sample" role="form" action="{{ route('ukm.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama UKM</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_ukm" class="form-control" id="exampleInputUsername2" placeholder="Nama UKM" value="{{ $ukm->nama_ukm }}" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Deskripsi UKM</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="desk" id="" rows="5" placeholder="Isi Artikel" disabled>{{$ukm->desk}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Foto</label>
                    <div class="col-sm-9">
                        <img src="{{ asset('storage/ukm/' . $ukm->foto) }}" style="border-radius: 0; width: 100px; height: 50px; margin-bottom: 10px;"/>
                    </div>
                    </div>
                    <a href="{{ route('ukm.index') }}" type="submit" class="btn btn-info mr-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection