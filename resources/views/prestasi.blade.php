@extends('layouts.user')
@section('content')
    <h2 align="center">Prestasi</h2>

    <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            @foreach($prestasi as $data)
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate" style="border: none;">
                <a href="#" class="open-modal"
                   data-title="{{ $data->nama_prestasi }}"
                   data-description="{{ $data->desk }}"
                   data-image="{{ asset('storage/prestasi/' . $data->foto) }}">
                  <figure class="media">
                    <img src="{{ asset('storage/prestasi/' . $data->foto) }}" alt="{{ $data->nama_prestasi }}" class="img-responsive" style="border-radius: 0px;">
                  </figure>
                  <div class="text">
                    <h3>{{ $data->nama_prestasi }}</h3>
                  </div>
                </a>
              </div>
            </div>
            @endforeach            
          </div>
        </div>
      </section>
      <div id="customModal" class="custom-modal">
        <div class="custom-modal-content">
          <span class="custom-close">&times;</span>
          <h2 id="modalTitle">Judul</h2>
          <img id="modalImage" src="" alt="" class="img-fluid" style="max-width:100%; height:auto; margin-bottom:1rem;">
          <p id="modalDescription">Deskripsi</p>
        </div>
      </div>
      
  
@endsection