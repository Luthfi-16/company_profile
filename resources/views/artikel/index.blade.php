@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-xl-12 grid-margin stretch-card flex-column">
      <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Artikel</h4>
        <p class="card-description">
          <a href="{{ route('artikel.create') }}" class="btn" style="color: rgb(255, 255, 255); background-color :gray">Tambah</a>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul Artikel</th>
                <th>Isi Artikel</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach($artikel as $data)
                  

              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->isi }}</td>
                <td><img src="{{ asset('storage/artikel/' . $data->foto) }}" style="border-radius: 0; width: 100px; height: 50px;"/></td>
                <td><form action="{{ route('artikel.destroy', $data->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('artikel.edit', $data->id) }}"
                          class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                      <a href="{{ route('artikel.show', $data->id) }}"
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