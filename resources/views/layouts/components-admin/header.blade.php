<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row ">
      <div class="navbar-brand-wrapper d-flex justify-content-center" style="background-color: gray">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <span style="font-size: 20px; font-weight: 700; color: #fefefe;">
              Binus <br>
              Universitas
            </span>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" >
        <ul class="navbar-nav mr-lg-2 col-lg-12">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset ('admin/images/faces/face17.jpg')}}" alt="profile"/>
              <span class="nav-profile-name">
                {{ Auth::user()->name }}
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                @auth
                <i class="typcn typcn-eject text-primary"></i>
                <form method="POST" action="{{route('logout')}}">
                      @csrf
                <button type="submit" class="nav-link btn btn-link">
                    Logout
                </button>
                </form>
                @endauth
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>