@extends('layouts.user')
@section('content')
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2>UKM <br>
                    (Unit Kegiatan Mahasiswa)</h2>
            </div>
        </div>
        <div class="row">
            @foreach($ukm as $data)
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                <figure class="probootstrap-media"><img src="{{ asset ('storage/ukm/' . $data->foto)}}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                <a href="{{ route ('detail_ukm', $data->id)}}" class="probootstrap-featured-news-box">
                    <div class="probootstrap-text artikel">
                        <h3><b>{{ $data->nama_ukm }}</b></h3>
                        <p>{{ Str::limit($data->desk, 55)}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection