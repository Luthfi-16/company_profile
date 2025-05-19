@extends('layouts.user')
@section('content')

<h2 align="center">Dosen</h2>

<section class="probootstrap-section">
    <div class="container">
      <div class="row">
        @foreach($dosen as $data)
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-teacher text-center probootstrap-animate">
            <figure class="media">
              <img src="{{ asset ('storage/dosen/' . $data->foto)}}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
            </figure>
            <div class="text">
              <h3>{{ $data->nama_dosen}}</h3>
              <p>{{ $data->email }}</p>
                  <ul class="probootstrap-footer-social">
                    <h5>{{ $data->jabatan }} | {{ $data->status }}</h5>
                  </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection