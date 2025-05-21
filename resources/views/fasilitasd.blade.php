@extends('layouts.user')
@section('content')

<h2 align="center">{{ $fasilitas->nama_fasilitas }}</h2>

<section class="probootstrap-section probootstrap-bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-feed three-cols">
                    <div class="grid-sizer"></div>
                    <div class="gutter-sizer"></div>
                    <div class="probootstrap-gallery">
                        @foreach( $fotofasilitas as $data )
                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                <a href="{{ asset ('storage/foto_fasilitas/' . $data->image)}}" itemprop="contentUrl" data-size="1000x632">
                                <img src="{{ asset ('storage/foto_fasilitas/' . $data->image)}}" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                                </a>
                                <figcaption itemprop="caption description">{{$data->fasilitas->nama_fasilitas}}</figcaption>
                            </figure>
                        @endforeach
                    </div>
                </div>
                <p><a href="{{ url('fasilitas')}}" class="btn btn-warning">Kembali</a></p>  
            </div>
        </div>
    </div>
  </section>

  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">

          <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
          </div>

          <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                  <div class="pswp__counter"></div>
                  <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                  <button class="pswp__button pswp__button--share" title="Share"></button>
                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                  <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                  <div class="pswp__preloader">
                      <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                          <div class="pswp__preloader__donut"></div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                  <div class="pswp__share-tooltip"></div> 
              </div>
              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
              </button>
              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
              </button>
              <div class="pswp__caption">
                  <div class="pswp__caption__center"></div>
              </div>
          </div>
      </div>
    </div>
@endsection