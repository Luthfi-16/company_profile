<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset ('assets/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{ asset ('assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset ('assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="icon" href="{{ asset ('user/img/Logo_Binus_University.png')}}" type="image/png">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset ('user/img/Logo_Binus_University.png')}}" alt="" style="width: 50%;">
              </div>
              <h4>Silahkan login</h4>
              <h6 class="font-weight-light">Login untuk melanjutkan </h6>
              <form class="pt-3" method="POST" action="{{ route ('login')}}">
                @csrf
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-secondary btn-lg font-weight-medium auth-form-btn">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{ asset ('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset ('assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset ('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset ('assets/js/template.js')}}"></script>
  <script src="{{ asset ('assets/js/settings.js')}}"></script>
  <script src="{{ asset ('assets/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
