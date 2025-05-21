@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-12 grid-margin stretch-card flex-column">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Foto Fasilitas</h4>
                <p class="card-description">
                Untuk Mengedit Data Foto Fasilitas
                </p>
                <form class="form-sample" role="form" action="{{ route('fotofasilitas.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Id Fasilitas</label>
                    <div class="col-sm-9">
                        <select disabled name="id_fasilitas" class="form-control  @error('id_fasilitas') is-invalid @enderror">
                            @foreach($fasilitas as $data)
                                <option value="{{ $data->id}}" {{ $data->id == $fotofasilitas->id_fasilitas ? 'selected' : ''}} >{{ $data->nama_fasilitas}} </option>
                            @endforeach
                        </select>
                        @error('id_fasilitas')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Foto</label>
                    <div class="col-sm-9">
                        <img src="{{ asset('storage/foto_fasilitas/' . $fotofasilitas->image) }}" style="border-radius: 0; width: 100px; height: 50px; margin-bottom: 10px;"/>
                    </div>
                </div>
                <a href="{{ route ('fotofasilitas.index')}}" type="submit" class="btn btn-info mr-2">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection