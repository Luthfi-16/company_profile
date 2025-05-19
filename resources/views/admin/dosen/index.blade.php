@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-xl-12 grid-margin stretch-card flex-column">
      <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Dosen</h4>
        <p class="card-description">
          <a href="{{ route('dosen.create') }}" class="btn" style="color: rgb(255, 255, 255); background-color :gray">Tambah</a>
        </p>
        <div class="table-responsive">
          <table class="table" style="width: 100%;">
            <thead>
              <tr>
                <th>
                  Profil
                </th>
                <th>
                  Nama Dosen
                </th>
                <th>
                  Telepon
                </th>
                <th>
                  Email
                </th>
                <th>
                  Jabatan
                </th>
                <th>
                  Status
                </th>
                <th>
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach($dosen as $data) 
              <tr>
                <td>
                  <img src="{{ asset('storage/dosen/' . $data->foto) }}" alt="image"/>
                </td>
                <td>
                  {{ $data->nama_dosen }}
                </td>
                <td>
                  {{ $data->telepon}}
                </td>
                <td>
                  {{ $data->email}}
                </td>
                <td>
                  {{ $data->jabatan}}
                </td>
                <td>
                  {{ $data->status}}
                </td>
                <td>
                  <form action="{{ route('dosen.destroy', $data->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('dosen.edit', $data->id) }}"
                          class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                      <a href="{{ route('dosen.show', $data->id) }}"
                          class="btn btn-info"><i class="bi bi-card-text"></i></a>
                      <button class="btn btn-danger" type="submit"  onclick="return confirm('Apakah Anda Yakin?')"><i class="bi bi-trash"></i></button>
                  </form>
                </td>
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