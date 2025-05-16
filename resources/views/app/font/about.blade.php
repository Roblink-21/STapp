@extends('layouts.template')

@push('css')


<link href="{{ asset('assets/front/assets/css/now-ui-kit.css?v=1.3.0')}}" rel="stylesheet" />


<style>

.navbar.navbar-transparent {
   background-color: #040445  !important;
    /*box-shadow: none;*/
    /*color: #FFFFFF;*/
    padding-top: 20px !important;
  }

   .page-header .container {
      height: 100%;
      z-index: 1;
      text-align: justify;
      position: relative;
   }

   @media (max-width: 479px) {


      .section {
         padding: 26px;
         position: relative;
         background: unset;
      }

      .index-page .page-header {
         height: 150vh;
      }
   }
</style>

@endpush

 <!-- loader  -->
 <!-- <x-load/> -->
   <!-- end loader -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Sobre Nosotros</h1>
                    <h5 class="mb-3">Somos una empresa en crecimiento, dedicada a ofrecer apoyo y asesoramiento personalizado para el bienestar de nuestros clientes.</h5>
                    <p>Con una sólida trayectoria en el sector, nuestro equipo de profesionales comprometidos trabaja con dedicación para brindar un servicio eficiente, cercano y personalizado.</p>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="my-auto" src="https://www.dropbox.com/scl/fi/99mtj75tztxnqz375ol64/lav.png?rlkey=6wlnmjn3vwc4d5oux0898wull&st=q1m71g1b&raw=1" alt="#" style="padding-top: 100px;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Nuestra Vision</h1>
                    <p>Nuestra visión es ser reconocidos como líderes en el sector de servicios de mantenimiento y servicios técnicos de electricidad y electrónica, destacándonos por ofrecer soluciones innovadoras y de buena calidad.</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Diagnóstico</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Reparación</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Mantenimiento</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- <div class="page-header clear-filter" filter-color="orange">
   <div class="page-header-image" data-parallax="true" style="background-image:url('assets/front/assets/img/bg8.jpg');">
   </div>
   <div class="container">
      <div class="row">


         <div class="col-lg-7 col-xs-12 col-sm-4 col-md-4 section ">
            <h2 class="title">SERVICIO TECNICO</h2>
            <p class="description">
               Now UI Kit PRO comes with 100 custom icons made by our friends from NucleoApp. The official package contains over 2.100 thin icons which are looking great in combination with Now UI Kit PRO Make sure you check all of them and use those that you like the most.</p>
         </div>



         <div class="col-xs-12 col-lg-5 section ">
            <figure><img src="assets/front/assets/img/lav.png" alt="#" /></figure>
         </div>
      </div>
   </div>
</div> -->



<!-- about section -->
<!-- <div id="about" class="about mt-3 mb-3">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 col-lg-7">
            <div class="about_box">
               <div class="titlepage">
                  <h2><strong class="yellow">Sobre Nosotros</strong><br> Somos una empresa en crecimiento, dedicada a ofrecer apoyo y asesoramiento personalizado para el éxito de nuestros clientes</h2>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-5">
            <div class="about_img">
               <figure><img src="https://www.dropbox.com/scl/fi/99mtj75tztxnqz375ol64/lav.png?rlkey=6wlnmjn3vwc4d5oux0898wull&st=q1m71g1b&raw=1" alt="#" /></figure>
            </div>
         </div>

      </div>

      <div class="row">
         <div class="col-md-12 col-lg-7">
            <div class="about_box">
               <h3>Mision</h3>
               <p>Nuestra misión es ofrecer soluciones innovadoras y de alta calidad que satisfagan las necesidades específicas de nuestros clientes. Con una sólida trayectoria en el sector, nuestro equipo de profesionales comprometidos trabaja con dedicación para brindar un servicio eficiente, cercano y personalizado. Nos enfocamos en superar las expectativas de quienes confían en nosotros, garantizando siempre la excelencia y la satisfacción, con el objetivo de convertirnos en su aliado de confianza mediante productos y servicios que realmente marquen la diferencia.
            </div>
         </div>
         <div class="col-md-12 col-lg-5">
            <div class="about_box">
               <h3>Vision</h3>
               <p>Nuestra visión es ser reconocidos como líderes en el sector de servicios de mantenimiento y servicios técnicos de electricidad y electrónica, destacándonos por ofrecer soluciones innovadoras y de buena calidad. Aspiramos a consolidar un equipo de expertos altamente capacitados y a utilizar tecnologías de vanguardia para garantizar la máxima eficiencia y sostenibilidad en cada proyecto. Buscamos posicionarnos como la opción preferida por nuestros clientes, ofreciendo siempre un servicio confiable, accesible y adaptable a las necesidades cambiantes del mercado.</p>
            </div>
         </div>

      </div>

   </div>
</div> -->
<!-- about section -->