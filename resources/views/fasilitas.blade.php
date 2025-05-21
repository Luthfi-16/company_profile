@extends('layouts.user')
@section('content')
    <h2 align="center">Fasilitas</h2>
    <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            @foreach($fasilitas as $data)
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
                <div class="item">
                    <a href="{{ route('detail_fasilitas', $data->id) }}">
                        <div class="image-card">
                            <img src="{{ asset ('storage/fasilitas/'. $data->foto)}}" alt="Library 2">
                        <div class="image-title">{{ $data->nama_fasilitas }}</div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
@endsection