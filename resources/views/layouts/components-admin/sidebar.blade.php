<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="{{ url('admin')}}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <div class="badge badge-danger">new</div>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="typcn typcn-th-small-outline menu-icon"></i>
            <span class="menu-title">Tabel</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route ('artikel.index')}}">Tabel Artikel</a></li>
            </ul>
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route ('dosen.index')}}">Tabel Dosen</a></li>
            </ul>
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route ('fakultas.index')}}">Tabel Fakultas</a></li>
            </ul>
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route ('fasilitas.index')}}">Tabel Fasilitas</a></li>
            </ul>
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route ('prestasi.index')}}">Tabel Prestasi</a></li>
            </ul>
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route ('ukm.index')}}">Tabel UKM</a></li>
            </ul>
        </div>
        </li>
    </ul>
</nav>