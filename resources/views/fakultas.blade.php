@extends('layouts.user')
@section('content')
<section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
          <h2>Fakultas</h2>
        </div>
      </div>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      @foreach($fakultas as $data)
      <div class="col-md-6">
        <div class="probootstrap-service-2 probootstrap-animate">
          <div class="image">
            <div class="image-bg">
              <img src="{{ asset ('storage/fakultas/' . $data->foto)}}" alt="Free Bootstrap Template by ProBootstrap.com"
              style="width: 200px; height: 350px; object-fit: cover;">
            </div>
          </div>
          <div class="text">
            <h3>{{ $data->nama_fakultas }}</h3>
            <p>{{ Str::limit($data->desk, 200) }}</p>
            <p><a href="{{ route ('detail_fakultas', $data->id)}}" class="btn btn-warning">Selengkapnya</a></p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection