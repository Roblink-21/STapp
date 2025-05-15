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

  .light-background {
    --background-color: #f7f7f7;
    --surface-color: #ffffff;
  }

  .padg {
    padding: 20px;
  }

  p {

    text-align: justify;

  }

  /*--------------------------------------------------------------
# Global Sections
--------------------------------------------------------------*/
  section,
  .section {
    color: var(--default-color);
    background-color: var(--background-color);
    padding: 60px 0;
    scroll-margin-top: 100px;
    overflow: clip;
  }

  @media (max-width: 1199px) {

    section,
    .section {
      scroll-margin-top: 66px;
    }
  }


  /*--------------------------------------------------------------
# Services Section
--------------------------------------------------------------*/
  .services .service-item {
    background-color: var(--surface-color);
    box-shadow: 0px 5px 90px 0px rgba(0, 0, 0, 0.1);
    height: 100%;
    padding: 60px 30px;
    text-align: center;
    transition: 0.3s;
    border-radius: 5px;
  }

  .services .service-item .icon {
    margin: 0 auto;
    width: 100px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: ease-in-out 0.3s;
    position: relative;
  }

  .services .service-item h3 {
    font-weight: 700;
    margin: 10px 0 15px 0;
    font-size: 22px;
  }

  .services .service-item p {
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }


  /** portfolio section **/

  .portfolio {
    padding-top: 90px;
  }

  .portfolio .titlepage {
    text-align: left;
    padding-bottom: 40px;
  }

  .portfolio .titlepage h2 {
    color: #040300;
  }

  .portfolio .titlepage span {
    color: #040300;
    font-size: 17px;
    line-height: 28px;
    font-weight: 600;
  }

  .portfolio .titlepage p {
    color: #434343;
    font-size: 17px;
    line-height: 28px;
    padding-top: 15px;
  }

  .portfolio .portfolio_Carousel .carousel-caption {
    position: inherit;
    padding: 0;
  }

  .portfolio_box {
    text-align: center;
    position: relative;
  }

  .portfolio_img {
    margin-bottom: 30px;
  }

  .portfolio_img img {
    width: 283px;
    height: 330px;
  }

  .portfolio_Carousel .carousel-indicators {
    display: none;
  }

  #myCarousel a.carousel-control-prev {
    position: absolute;
    left: 20px;
  }

  #myCarousel a.carousel-control-next {
    right: 20px;
    position: absolute;
  }

  #myCarousel .carousel-control-next,
  #myCarousel .carousel-control-prev {
    width: 60px;
    height: 60px;
    background: #29426c;
    opacity: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    top: 42%;
    border-radius: 30px;
  }
  /** end portfolio section **/

</style>

@endpush

 <!-- loader  -->
 <x-load/>
   <!-- end loader -->

<!-- service section -->

<section class="service_section layout_padding " style="padding-top: 90px;">
  <div class="container">
    <div class="custom_heading-container">
      <h4 class=" ">
        NUESTRAS ESPECIALIDADES
      </h4>
    </div>

    <div class="box b-1">
      <div class="img-box">
        <img src="https://www.dropbox.com/scl/fi/e9ue806tbmmpug2xru1sd/w-1.png?rlkey=ux249o86qk3l536oir2qkfbdb&st=pwbjyx8q&raw=1" >
      </div>

      <div class="detail-box">
        <h6>
          Mantemiento Preventivo y Correctivo
        </h6>
        <p>
          Nuestro mantenimiento preventivo se enfoca en inspecciones periódicas y ajustes necesarios para evitar fallos inesperados, prolongando la vida útil de los equipos. En caso de presentarse alguna avería, nuestro servicio correctivo actúa de manera rápida y eficaz, solucionando el problema de forma precisa y con mínima interrupción. Nos aseguramos de ofrecerte un servicio integral y de calidad, adaptado a tus necesidades específicas.
        </p>
      </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services section light-background">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6 padg " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item item-cyan position-relative">
          <img src="https://www.dropbox.com/scl/fi/n3mckug5a804gqvp74wt6/cooling.jpg?rlkey=eitsqlne1hc67yk9nj2c9zul6&st=atn85flg&raw=1"  width="100" height="100" viewBox="0 0 600 600">
          <a class="stretched-link">
            <h3>Sistemas de Refrigeracion</h3>
          </a>
          <p>Nos especializamos en el diagnostico, reparación de compresores, recarga de gas refrigerante, y mantenimiento de circuitos frigoríficos de todas las marcas. Ofrecemos atención personalizada y servicio a domicilio.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 padg " data-aos="fade-up" data-aos-delay="200">
        <div class="service-item item-orange position-relative">
          <img src="https://www.dropbox.com/scl/fi/ufvbqmrccdj78izh6pxwx/s-3.jpg?rlkey=7soz1e8tjgj0r3jx6j65rghp6&st=7ab2fd0o&raw=1"  width="100" height="100" viewBox="0 0 600 600">
          <a class="stretched-link">
            <h3>Linea Blanca</h3>
          </a>
          <p>Brindamos una garantía de 2 años en todos nuestros trabajos. Realizamos reparaciones y mantenimiento de lavadoras Y secadoras de todas las marcas, con servicio a domicilio en todo Quito.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 padg " data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
          <img src="https://www.dropbox.com/scl/fi/bvra32o2qrrmed52sjjsn/ele.jpg?rlkey=yqaul5atai9sy4yvdznug7tjt&st=yponyjtp&raw=1" width="100" height="100" viewBox="0 0 600 600">
          <a class="stretched-link">
            <h3>Tarjetas Electronicas</h3>
          </a>
          <p>Nos especializamos en la reparación de placas madre, componentes electrónicos y sistemas de circuitos, utilizando tecnología avanzada para diagnósticos precisos.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 padg " data-aos="fade-up" data-aos-delay="400">
        <div class="service-item item-red position-relative">
          <img src="https://www.dropbox.com/scl/fi/hn9z7hknk2sc9yylkry5m/electr.jpg?rlkey=76lz8ezyy0d5gsh99ubrt6prl&st=15k1td6t&raw=1" width="100" height="100" viewBox="0 0 600 600">
          <a class="stretched-link">
            <h3>Sistemas Electricos</h3>
          </a>
          <p>Nos especializamos en la reparación de sistemas eléctricos, cableado, circuitos y paneles de control, asegurando una instalación segura y eficiente.</p>
          
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 padg" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item item-indigo position-relative">
          <img src="https://www.dropbox.com/scl/fi/04mfuzsb1ztfe06jjas18/tanq_pres.jpg?rlkey=rsbo2k94mwt2qqk66in5sbbvk&st=j3dl96h0&raw=1"  width="100" height="100" viewBox="0 0 600 600">
          <a class="stretched-link">
            <h3>Gasfiteria</h3>
          </a>
          <p>Nos especializamos en la detección y reparación de fugas, instalación de sistemas de agua, gas y desagüe, mantenimiento de griferías. sistemas de agua, gas y calefones de todas las marcas. Ofrecemos atención personalizada y servicio a domicilio.</p>
          
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 padg" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item item-pink position-relative">
          <img src="https://www.dropbox.com/scl/fi/w4pk14u6k8vet1kdc11hp/auto.jpg?rlkey=fwsnle7dpcxl2y1se0jtupsu0&st=o1xa08ik&raw=1"  width="100" height="100" viewBox="0 0 600 600">
          <a class="stretched-link">
            <h3>Automatización</h3>
          </a>
          <p>Nos especializamos en el diseño, instalación y mantenimiento de sistemas automatizados de hogares y empresas, incluyendo control de iluminación, climatización, seguridad y dispositivos inteligentes.</p>
          
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->


<!-- carrousel  -->
<x-carrousel/>
   <!-- end carrousel -->