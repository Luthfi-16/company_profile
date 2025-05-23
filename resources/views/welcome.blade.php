@extends('layouts.user')
@section('content')
      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url({{ asset ('user/img/slider_binus1.jpg')}})" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Your Bright Future is Our Mission</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url({{ asset ('user/img/slider_binus2.jpg')}})" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1>
                  </div>
                </div>
              </div>
            </div>
            
          </li>
          <li style="background-image: url({{ asset ('user/img/slider_binus3.jpg')}})" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      
      <section id="tentang" class="probootstrap-section probootstrap-section-colored" style="background-color: rgb(66, 66, 66)">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>Selamat Datang Di Universitas BINUS</h2>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate" style="box-shadow: 2px 2px 2px">
                  <h3><b>Tentang BINUS</b></h3>
                  <p>Universitas Bina Nusantara, atau juga dikenal dengan Binus University, merupakan salah satu universitas swasta yang berlokasi di Jakarta, Indonesia. Berawal dari sebuah institusi pelatihan komputer Modern Computer Course pada 21 Oktober 1974, dan berkembang dan akhirnya berubah menjadi Universitas pada 8 Agustus 1996, Universitas Bina Nusantara.</p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url({{ asset ('user/img/slider_binus1.jpg')}});">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-color: gray">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">INFORMASI</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Artikel</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Fasilitas</a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="tab-content">
                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        @foreach($artikel->take(3) as $data)
                        <div class="item">
                            <figure class="probootstrap-media"><img src="{{ asset('storage/artikel/' . $data->foto) }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <a href="{{route ('detail_artikel', $data->id)}}" class="probootstrap-featured-news-box">
                              <div class="probootstrap-text artikel">
                                <h3>{{ $data->judul}}</h3>
                                <p>{{ Str::limit($data->isi, 55)}}</p>
                                <span class="probootstrap-date"><i class="icon-calendar"></i>{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('d F Y') }}
                                </span>
                              </div>
                            </a>
                        </div>
                        @endforeach
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="{{ url('artikel')}}" class="btn btn-warning">Lihat Semua Artikel</a></p>  
                    </div>
                  </div>
                </div>
                <div id="upcoming-events" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl2">
                        @foreach($fasilitas as $data)
                        <a href="{{ route('detail_fasilitas', $data->id)}}">
                        <div class="item">
                          <div class="image-card">
                            <img src="{{ asset ('storage/fasilitas/'. $data->foto)}}" alt="Library 2">
                            <div class="image-title">{{ $data->nama_fasilitas }}</div>
                          </div>
                        </div>
                        </a>
                        @endforeach
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                   <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="{{ url('fasilitas')}}" class="btn btn-warning">Lihat Semua Fasilitas</a></p>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Terdapat Beberapa Fakultas Di BINUS</h2>
            </div>
          </div>
          <!-- END row -->
          @foreach($fakultas->take(2) as $data)
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{ asset ('storage/fakultas/'. $data->foto)}}" alt="Free Bootstrap Template by ProBootstrap.com"
                    style="width: 200px; height: 350px; object-fit: cover;">
                  </div>
                </div>
                <div class="text">
                  <h3>{{ $data->nama_fakultas}} </h3>
                  <p>{{ Str::limit($data->desk, 200) }}</p>
                  <p><a href="{{ route ('detail_fakultas', $data->id)}}" class="btn btn-warning">Selengkapnya</a></p>
                </div>
              </div>
          </div>
          @endforeach
          <div class="row">
            <div class="col-md-12 text-center">
              <p><a href="{{ url('fakultas')}}" class="btn btn-warning" style="margin-top: 50px;">Lihat Semua Fakultas</a></p>  
            </div>
          </div>
        </div>
      </section>

      
      
      <section class="probootstrap-section  probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Temui Pengajar/Dosen Kita</h2>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            @foreach($dosen->take(4) as $data)
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="{{ asset ('storage/dosen/' . $data->foto)}}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>{{ $data->nama_dosen }}</h3>
                  <p>{{ $data->email }}</p>
                  <ul class="probootstrap-footer-social">
                    <h5>{{ $data->jabatan }} | {{ $data->status }}</h5>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
            <div class="clearfix visible-sm-block visible-xs-block"></div>
          </div>
        </div>
      </section>
      
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-color: gray;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Prestasi Universitas</h2>
              <p class="lead">Inilah Beberapa Prestasi atau Penghargaan yang di dapat oleh BINUS (Bina Nusantara)</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth"  data-item-count="1">
                @foreach($prestasi as $data)
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="{{ asset ('storage/prestasi/' . $data->foto)}}" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <b style="color: black;"><span>{{ $data->nama_prestasi }}</span></b>
                    <blockquote class="quote">{{ $data->desk }}</blockquote>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p><a href="{{ url('prestasi')}}" class="btn btn-warning">Lihat Semua Prestasi</a></p>  
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Kenapa Harus Memilih Bina Nusantara??</h2>
              <p class="lead">Ini Penjelasannya!!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Reputasi Akademik dan Akreditasi</h3>
                  <p>BINUS dikenal sebagai salah satu universitas swasta terbaik di Indonesia, terutama dalam bidang Teknologi Informasi (IT), Bisnis, dan Desain. Banyak program studinya sudah terakreditasi nasional dan internasional, seperti dari ABET (untuk IT) dan AACSB (untuk bisnis).</p>
                </div>  
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Koneksi Global dan Program Internasional</h3>
                  <p>BINUS punya berbagai program double degree, student exchange, dan kerja sama dengan universitas luar negeri. Bahkan ada program 2+1, di mana 2 tahun kuliah di Indonesia dan 1 tahun di luar negeri.</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Fasilitas dan Infrastruktur Modern</h3>
                  <p>Kampus BINUS (seperti di Alam Sutera, Kemanggisan, Bekasi, Bandung, dan Malang) punya fasilitas modern: ruang belajar nyaman, lab teknologi canggih, ruang startup, dan lain-lain.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Komunitas dan Networking yang Luas</h3>
                  <p>BINUS punya jaringan alumni yang sangat luas dan aktif di berbagai industri, baik di Indonesia maupun luar negeri. Ini sangat membantu dalam membangun koneksi dan mencari pekerjaan.</p>
                </div>  
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Kualitas Pengajar dan Kurikulum Up-to-Date</h3>
                  <p>Dosen-dosen di BINUS berasal dari berbagai latar belakang profesional dan akademik, serta kurikulumnya dirancang agar sesuai dengan kebutuhan industri terbaru.</p>
                </div>
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Jaminan Karier dan Program 3+1</h3>
                  <p>Program 3+1 memungkinkan mahasiswa menghabiskan 1 tahun untuk magang di perusahaan (lokal atau internasional), membangun startup, atau riset. Ini membuat lulusan BINUS lebih siap kerja.</p>
                </div>
              </div>

            </div>
          </div>
          <!-- END row -->
        </div>
      </section>
@endsection