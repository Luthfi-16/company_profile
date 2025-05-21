<!DOCTYPE html>

<!-- 
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BINUS University</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="icon" href="{{ asset ('user//img/Logo_Binus_University.png')}}" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('user/css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{ asset ('user/css/style.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('user/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      

      @include('layouts.components-user.header')
      @yield('content')
      @include('layouts.components-user.footer')

    </div>
    <!-- END wrapper -->
    
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var carousels = document.querySelectorAll('.owl-carousel-fullwidth');
    
        carousels.forEach(function (carousel) {
          var itemCount = parseInt(carousel.getAttribute('data-item-count')) || 0;
    
          $(carousel).owlCarousel({
            items: 1,
            loop: itemCount > 1,
            margin: 20,
            nav: false,
            dots: true,
            smartSpeed: 800,
            autoHeight: true,
            autoplay: itemCount > 1,
            navText: [
              "<i class='icon-keyboard_arrow_left owl-direction'></i>",
              "<i class='icon-keyboard_arrow_right owl-direction'></i>"
            ]
          });
    
          // Tambahan opsional: pastikan tampil jika hanya 1 item
          if (itemCount <= 1) {
            carousel.classList.add('owl-loaded');
          }
        });
      });
    </script>
    

    <script src="{{ asset ('user/js/scripts.min.js')}}"></script>
    <script src="{{ asset ('user/js/main.min.js')}}"></script>
    <script src="{{ asset ('user/js/custom.js')}}"></script>
  </body>
</html>