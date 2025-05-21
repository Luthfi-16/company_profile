<nav class="navbar navbar-default probootstrap-navbar">
  <div class="container">
    <div class="navbar-header">
      <div class="btn-more js-btn-more visible-xs">
        <a href="#"><i class="icon-dots-three-vertical "></i></a>
      </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="{{ asset('user/img/Logo_Binus_University.png') }}" alt="" style="width: 100px; margin-top: 10px">
    </div>

    <div id="navbar-collapse" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/')}}">Beranda</a></li>
        <li><a href="{{ url('artikel')}}">Artikel</a></li>
        <li><a href="{{ url('dosen')}}">Dosen</a></li>
        <li><a href="{{ url('fakultas')}}">Fakultas</a></li>
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle">Halaman</a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('fasilitas')}}">Fasilitas</a></li>
            <li><a href="teachers.html">Prestasi</a></li>
            <li><a href="teachers.html">UKM</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>