@extends('layouts.user')
@section('content')
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2>Artikel</h2>
            </div>
        </div>
        <div class="row">
            @foreach($artikel as $data)
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                <figure class="probootstrap-media"><img src="{{ asset ('storage/artikel/' . $data->foto)}}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                <a href="{{ route ('detail_artikel', $data->id)}}" class="probootstrap-featured-news-box">
                    <div class="probootstrap-text artikel">
                            <h3>{{ $data->judul }}</h3>
                            <p>{{ Str::limit($data->isi, 55)}}</p>
                        <span class="probootstrap-date"><i class="icon-calendar"></i>{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('d F Y') }}</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection