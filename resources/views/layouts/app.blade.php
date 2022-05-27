<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

      <head>
        <title>Og1</title>
        {{-- <link rel="stylesheet" href="{{URL::asset('/lib/bootstrap/dist/css/bootstrap.min.css')}}" /> --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('/css/site.css')}}" asp-append-version="true" />




      <!-- Favicons -->
      <link href="{{URL::asset('/home/img/favicon.png')}}" rel="icon">
      <link href="{{URL::asset('/home/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="{{URL::asset('/home/vendor/aos/aos.css')}}" rel="stylesheet">
      <link href="{{URL::asset('/home/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('/home/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
      <link href="{{URL::asset('/home/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('/home/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
      <link href="{{URL::asset('/home/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="{{URL::asset('/home/css/style.css')}}" rel="stylesheet">

    </head>
    <body>


         <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="/" class="logo d-flex align-items-center">
            <img src="{{URL::asset('/home/img/og1_logo_v2.png')}}" alt="">
            <span style="color:red;">Og</span><span>Hum</span>
          </a>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="/#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="/#about">About</a></li>

              <li><a class="nav-link scrollto" href="/#pricing">Prices</a></li>

              <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
              {{-- <li><a class="getstarted scrollto" href="/#about">Get Started</a></li> --}}
              @guest
                <li><a class="getstarted scrollto" href="{{ route('login') }}">Sign In</a></li>
              @endguest


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

          @auth
            <a href="{{ URL::asset('Login/Login" class="logo d-flex align-items-center')}}" id="imgAvatarUser">
                <img src="{{URL::asset('/home/img/avatar0.png')}}" height="50" width="50" alt="">
            </a>
          @endauth


        </div>
      </header><!-- End Header -->
        <!-- END nav -->


        <!-- CONTENT -->

        <div class="content imgFundo" style="float: left;" >
          @yield('conteudo')
          {{--
          <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
            --}}
        </div>



        <footer class="border-top footer text-muted">
            <div class="container">
                &copy; 2022 - OgHum - Developed by Edson Márcio
            </div>
        </footer>

        <script src="{{ URL::asset('js/app.js')}}"></script>
        {{-- <script src="{{ URL::asset('lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script> --}}




      <!-- Vendor JS Files -->
      <script src= "{{ URL::asset('home/vendor/purecounter/purecounter.js')}}"></script>
      <script src= "{{ URL::asset('home/vendor/aos/aos.js')}}"></script>
      <script src= "{{ URL::asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src= "{{ URL::asset('home/vendor/glightbox/js/glightbox.min.js')}}"></script>
      <script src= "{{ URL::asset('home/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
      <script src= "{{ URL::asset('home/vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src= "{{ URL::asset('home/vendor/php-email-form/validate.js')}}"></script>

      <!-- Template Main JS File -->
      <script src="{{ URL::asset('home/js/main.js')}}"></script>







         @livewireScripts

         @yield('scripts')

  </body>
</html>

<script>
  function subAvatar(valor){


      //console.log('ICON:' + v_icon);

      if (v_icon.length>10){

          document.getElementById('img_avatar')
          .setAttribute(
              'src', valor
              //'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHElEQVQI12P4//8/w38GIAXDIBKE0DHxgljNBAAO9TXL0Y4OHwAAAABJRU5ErkJggg=='
          );

      }
  }

</script>
