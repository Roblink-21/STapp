<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="https://cdn-icons-png.flaticon.com/512/2345/2345548.png">
  <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/2345/2345548.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Servicio tecnico Garantizado
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/assets/front/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/front/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <link href="/assets/front/assets/css/animate.css" rel="stylesheet" />
  <link href="/assets/front/assets/demo/demo.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  

</head>

<body class="index-page sidebar-collapse">
  
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="400" style="background-color: #040445;">

    <div class="container">
      <div class="navbar-translate">

        <a class="navbar-brand" href="/" rel="tooltip" data-placement="bottom">
          Servicio Tecnico
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ asset('assets/front/assets/img/blurred-image-1.jpg')}}">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="/about"><i class="now-ui-icons users_circle-08" aria-hidden="true"></i> NOSOTROS </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/service"><i class="now-ui-icons ui-2_settings-90" aria-hidden="true"></i> SERVICIOS </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/contact"><i class="now-ui-icons ui-1_send" aria-hidden="true"></i> CONTACTO </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  @stack('css')

  @yield('content_home')

  <section class="info_section layout_padding" data-background-color="black">
    <div class="container">
      <div class="row">

        <div class="col-md-3">
          <div class="content-center brand">
           <img class="n-logo" src="assets/front/assets/img/now-logo.png" alt="">
          </div>
        </div>


        <div class="col-md-3">
          <div class="discover">
            <h4>
              MENU
            </h4>
            <ul>
              <li>
                <a href="/">
                  INICIO
                </a>
              </li>
              <li>
                <a href="/about">
                  NOSOTROS
                </a>
              </li>
              <li>
                <a href="/service">
                  SERVICIOS
                </a>
              </li>
              <li>
                <a href="/contact">
                  CONTACTO
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-4">
          <div class="info-contact">
            <h4>
              Contacto
            </h4>
            <div class="location">
              <h6>
                Correo
              </h6>
              <a href="">
                <a class="nav-link" href="/contact"><i class="now-ui-icons ui-1_email-85" aria-hidden="true"></i><span>
                   victor.fabian@hotmail.com
                </span></a>
      
              </a>
            </div>
            <div class="call">
              <h6>
                Ubicación
              </h6>
              <a href="">
                <a class="nav-link" href="/contact"><i class="now-ui-icons location_pin" aria-hidden="true"></i> <span>
                   QUITO-ECUADOR
                </span> </a>
                
              </a>
            </div>
            <div class="call">
              <h6>
                Servicio al cliente:
              </h6>
              <a href="">
                <a class="nav-link" href="/contact"><i class="now-ui-icons ui-1_send" aria-hidden="true"></i>  <span>
                   (+593) 99 253 5958
                </span></a>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="row justify-content-md-center sharing-area text-center">
            <div class="text-center col-md-12 col-lg-8">
              <a target="_blank" href="https://www.twitter.com/creativetim" class="btn btn-neutral btn-icon btn-instagram btn-round btn-lg" rel="tooltip">
                <i class="fab fa-instagram"></i>
              </a>
              <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip">
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  </div>

  <footer class="footer" data-background-color="black">
    <div class=" container ">
      <div class="copyright" id="copyright">
        &copy;
        COPYRIGHT
        <script>
          document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
        </script>, SERVICIO TECNICO.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->

  <script src="{{ asset('assets/front/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/front/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/front/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('assets/front/assets/js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/front/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{ asset('assets/front/assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/front/assets/js/now-ui-kit.js?v=1.3.0')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/front/assets/js/animate.js')}}" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>