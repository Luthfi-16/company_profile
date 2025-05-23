@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-12 grid-margin stretch-card flex-column">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data prestasi</h4>
                <p class="card-description">
                <a href="{{ route('prestasi.create') }}" class="btn" style="color: rgb(255, 255, 255); background-color :gray">Tambah</a>
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Prestasi</th>
                            <th>Deskripsi Prestasi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach($prestasi as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama_prestasi }}</td>
                            <td>{{  Str::limit($data->desk, 20) }}</td>
                            <td><img src="{{ asset('storage/prestasi/' . $data->foto) }}" style="border-radius: 0;"/></td>
                            <td><form action="{{ route('prestasi.destroy', $data->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('prestasi.edit', $data->id) }}"
                                    class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('prestasi.show', $data->id) }}"
                                    class="btn btn-info"><i class="bi bi-card-text"></i></a>
                                <button class="btn btn-danger" type="submit"  onclick="return confirm('Apakah Anda Yakin?')"><i class="bi bi-trash"></i></button>
                            </form></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection