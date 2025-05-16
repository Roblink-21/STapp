@extends('layouts.template')

@push('css')


<link href="{{ asset('assets/front/assets/css/now-ui-kit.css?v=1.3.0')}}" rel="stylesheet" />


<style>
  .navbar {
    padding-top: 0.625rem;
    padding-bottom: 0.625rem;
    min-height: 53px;
    margin-bottom: 20px;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.15);
  }

  .navbar.navbar-transparent {
    background-color: #040445  !important;
    /*box-shadow: none;*/
    /*color: #FFFFFF;*/
    padding-top: 20px !important;
  }
</style>

@endpush



<!-- about section -->
<section class="about_section layout_padding" style="padding-top: 160px;">
  <div class="container">
    <div class="custom_heading-container">
      <h1 class=" ">
        SERVICIO TECNICO
      </h1>
    </div>
    <h2 class="layout_padding2-top">
      Recibe el mejor servicio técnico especializado.
    </h2>
    <div class="img-box layout_padding2">
      <img src="https://www.dropbox.com/scl/fi/ug5udclkngb9bsljlgy88/about-img.jpg?rlkey=isbbl6ij6gy5yjv2biij32lqq&st=i4ytq9ml&raw=1" alt="">
    </div>
    <p class="layout_padding2-bottom">
      Si tienes alguna pregunta o requieres un presupuesto personalizado, no dudes en ponerte en contacto con nosotros. Nuestro equipo está disponible para ofrecerte la mejor solución adaptada a tus necesidades donde brindaremos un servicio de calidad y a responder a todas tus inquietudes, garantizando un trato cercano y profesional.
    </p>
  </div>
  <div class="container">
    <div class="btn-box">
      <a href="nucleo-icons.html" class="btn btn-wtp btn-round btn-lg" target="_blank">WhatsApp</a>
      <hr>
    </div>
  </div>

</section>
<!-- end about section -->