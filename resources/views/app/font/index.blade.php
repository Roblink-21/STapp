@extends('layouts.template')

@push('css')

<style>
  .title {

    color: white;

  }

  /* __________ Clean Code __________ */
  .cleancode_block {
    padding: 96px 0 78px;
    background-color: #383535;
    background-size: cover;
    background-position: 0 0;
    background-attachment: fixed !important;
  }

  .cleancode_block .tab-content {
    overflow: hidden;
    padding: 0;
    margin: 0 0 80px;
  }

  .cleancode_block p.title {
    margin: 0 0 17px;
    font-weight: 100;
    line-height: 80px;
    font-size: 80px;
    color: #fff;
  }

  .cleancode_block p.title b {
    font-weight: 500;
  }

  .cleancode_block span {
    font-weight: 300;
    line-height: 34px;
    font-size: 26px;
    color: #999;
  }

  .cleancode_block .tab-pane {
    display: block;
    height: 0;
    transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
  }

  .cleancode_block .tab-pane.active {
    height: auto;
    transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    -webkit-transform: translateY(0);
  }

  .ie .cleancode_block .tab-pane {
    display: none;
  }

  .ie .cleancode_block .tab-pane.active {
    display: block;
  }

  .nav-pills .nav-item .nav-link {
    background-color: unset;
    min-width: 100px;
    font-weight: 400;
    color: white;
    width: 170px;
    height: 170px;
    margin: 0;
    padding: 54px 0 0;
    text-align: center;
    border: 0 !important;
    border-radius: 0;
  }

  .nav-pills .nav-item .nav-link.active,
  .nav-pills .nav-item .nav-link.active:focus,
  .nav-pills .nav-item .nav-link.active:hover {
    background-color: white;
    color: black;
    box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
  }

  @media (max-width: 479px) {


    .cleancode_block .nav-pills {
      width: 290px;
    }

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


@section('content_home')

<div class="wrapper">


  <div class="page-header clear-filter" filter-color="sky">
    <div class="page-header-image" data-parallax="true" style="background-image:url('https://www.dropbox.com/scl/fi/my9akqlsrod1x7q1ge42s/fondo.jpg?rlkey=84it583ip55t3a7q9oihv0if8&st=4chii7o1&raw=1');">
    </div>

    <div class="container">
      <div class="content-center brand">
        <img class="n-logo" src="assets/front/assets/img/now-logo.png" alt="">
        <h1 class="h1-seo">SERVICIO TECNICO</h1>
        <h3>Recibe el mejor servicio tecnico especilizado</h3>
      </div>
      <h6 class="category category-absolute">
        Cada reparación es una obra de precisión. Servicio técnico que cuida hasta el último detalle.
        <a href="https://www.creative-tim.com" target="_blank">
          <img src="https://www.dropbox.com/scl/fi/0bf0wruz507uipam1lafu/log.png?rlkey=hsqc8tvzh70jbl4ryewlxd4ed&st=dnpqcqk2&raw=1" class="creative-tim-logo" />
        </a>.
      </h6>
    </div>
  </div>

  <!-- imagenes de presentacion seccion -->

  <!-- <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center"><img src="https://www.dropbox.com/scl/fi/8gud4xlcix2te76ymps7l/lav_sec.png?rlkey=dym8p5ks31is0tbw2vvykv1wb&st=yussk4t3&raw=1" alt=""></div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center"><img src="https://www.dropbox.com/scl/fi/ujryi7t806klhh500h3o9/tod.png?rlkey=xj0l9x9alsakz1di335lho28l&st=1mxnfn8w&raw=1" alt=""></div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center"><img src="https://www.dropbox.com/scl/fi/3uid9jw0kj41mwrd30hhn/refri.png?rlkey=pffo4ftl2q3lbhlnswu4c4s9f&st=l9d631zp&raw=1" alt=""></div>
    </div>
  </div>
</div> -->


<!-- carrousel  -->
<x-carrousel/>
   <!-- end carrousel -->


<!-- benefits  -->
<x-benefits/>
   <!-- end benefits -->


<div class="main">

  <!-- carrusel de logos de marcas  -->

  <div class="slideres">
    <div class="slide-track-1">
      <div class="slide-11">
        <img src="https://logos-world.net/wp-content/uploads/2022/12/Whirlpool-Logo-2010.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://i.pinimg.com/originals/dc/36/c1/dc36c1d02dfe2ec192b7ec6d2289cb2d.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://logos-world.net/wp-content/uploads/2021/08/GE-Symbol.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://logos-world.net/wp-content/uploads/2020/05/LG-Logo-700x394.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://1000logos.net/wp-content/uploads/2017/12/Frigidaire-Logo.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://www.odellequipment.com/images/milnor.jpg" alt="">
      </div>
      <div class="slide-11">
        <img src="https://creditazo.com.ec/wp-content/uploads/2023/01/Logo-Indurama.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://cdn.freelogovectors.net/wp-content/uploads/2023/01/kitchenaid-logo-freelogovectors.net_.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://uspto.report/TM/86855506/mark.png" alt="">
      </div>

      <div class="slide-11">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c3/Pacojet_logo.svg/2560px-Pacojet_logo.svg.png" alt="">
      </div>

      <div class="slide-11">
        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/brandlogo//BRD-53488/robot-coupe-logo.png" alt="">
      </div>
      

      <div class="slide-11">
        <img src="https://logos-world.net/wp-content/uploads/2022/12/Whirlpool-Logo-2010.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://i.pinimg.com/originals/dc/36/c1/dc36c1d02dfe2ec192b7ec6d2289cb2d.png" alt="">
      </div>

      <div class="slide-11">
        <img src="https://logos-world.net/wp-content/uploads/2021/08/GE-Symbol.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://logos-world.net/wp-content/uploads/2020/05/LG-Logo-700x394.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://1000logos.net/wp-content/uploads/2017/12/Frigidaire-Logo.png" alt="">
      </div>

      <div class="slide-11">
        <img src="https://www.odellequipment.com/images/milnor.jpg" alt="">
      </div>
      <div class="slide-11">
        <img src="https://creditazo.com.ec/wp-content/uploads/2023/01/Logo-Indurama.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://cdn.freelogovectors.net/wp-content/uploads/2023/01/kitchenaid-logo-freelogovectors.net_.png" alt="">
      </div>
      <div class="slide-11">
        <img src="https://uspto.report/TM/86855506/mark.png" alt="">
      </div>

      <div class="slide-11">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c3/Pacojet_logo.svg/2560px-Pacojet_logo.svg.png" alt="">
      </div>

      <div class="slide-11">
        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/brandlogo//BRD-53488/robot-coupe-logo.png" alt="">
      </div>

    </div>

  </div>
</div>

@endsection