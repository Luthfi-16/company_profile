@extends('layouts.user')
@section('content')
<section id="tentang" class="probootstrap-section probootstrap-section-colored" style="background-color: rgb(66, 66, 66)">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left section-heading probootstrap-animate">
          <h2>{{ $artikel->judul }}</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="probootstrap-flex-block d-flex flex-column align-items-center">
            <div class="probootstrap-image probootstrap-animate mb-4" 
                 style="width: 100%; box-shadow: 0px 0px 5px black; margin-bottom: 30px; height: 400px; background-size: cover; background-position: center; background-image: url({{ asset('storage/artikel/' . $artikel->foto) }});">
            </div>
            <div class="probootstrap-text probootstrap-animate" 
                 style=" box-shadow: 0px 0px 5px black; width: 100%; margin: auto; text-align: justify;">
              <h3><b>Tentang {{ $artikel->judul }}</b></h3>
              <p>{{ $artikel->isi }}</p>
              <p><a href="{{ url('artikel')}}" class="btn btn-warning">Kembali</a></p>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection