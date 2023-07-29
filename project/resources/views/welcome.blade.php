<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- meta tag -->
  <meta charset="utf-8">
  <title>{{ $nama_halaman }} | {{ $data->data->nama }}</title>

  <!-- responsive tag -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="{{ url()->current() }}" />

  <meta name="title" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
  <meta name="description" content="{{ config('global.perusahaan_attributes.company_desc') }}">
  <meta name="keywords" content="PT. Multi Arta Industri, PT. MAiN, Perusahaan pembuat silicone dan rubber, Pabrik pembuat silicone dan rubber, Manufacturers pembuat silicone dan rubber, Perusahaan silicone dan rubber, Pabrik silicone dan rubber, Pabrik pembuat rubber, Pabrik silicone, Pabrik rubber dan silicone terbaik.">
  <meta name="subject" content="{{ $data->data->nama }}">
  <meta name="language" content="ID">
  <meta name="author" content="{{ $data->data->nama }}">
  <meta name="designer" content="IT Department - {{ $data->data->nama }}">
  <meta name="copyright" content="Copyright &copy; {{ $data->data->nama }}">
  <meta name="url" content="{{ url()->current() }}">
  <meta name="identifier-URL" content="{{ url()->current() }}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
  <meta property="og:description" content="{{ config('global.perusahaan_attributes.company_desc') }}">
  <meta property="og:image" content="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->logo_name }}">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ url()->current() }}">
  <meta property="twitter:title" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
  <meta property="twitter:description" content="{{ config('global.perusahaan_attributes.company_desc') }}">
  <meta property="twitter:image" content="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->logo_name }}">

  <!-- favicon -->
  <link rel="apple-touch-icon" href="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->icon_name }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->icon_name }}">

  <!-- CSS -->
  <x-css-components />
</head>

<body class="home-orange-color3">

  <div class="offwrap"></div>

  <!--Preloader start here-->
  <x-loader-main :data="['data' => $data]" />
  <!--Preloader area end here-->

  <!-- Main content Start -->
  <div class="main-content">

    <!--Full width header Start-->
    <div class="full-width-header">
      <!--Header Start-->
      <header id="rs-header" class="rs-header header-style2 header-orange-modify2">
        <!-- Toolbar Area Start -->
        <x-topbar :data="['data' => $data]" />
        <!-- Toolbar Area End -->

        <!-- Menu Start -->
        <x-navbar :data="['data' => $data]" />
        <!-- Menu End -->

        <!-- Canvas Mobile Menu start -->
        <x-mobile-navbar :data="['data' => $data]" />
        <!-- Canvas Menu end -->
      </header>
      <!--Header End-->
    </div>
    <!--Full width header End-->

    <!-- Banner Start -->
    <div class="rs-slider slider-style3">
      <div id="banner" class="slider slider-slide-1">
      </div>
    </div>
    <!-- Banner End -->

    <!-- About Start -->
    <div class="rs-about about-style3 about-modify1 pt-120 pb-120 md-pt-80 md-pb-80">
      <div class="container">
        <div class="row y-middle">
          <div class="col-lg-6 md-mb-50">
            <div class="image-part2">
              <img src="assets/images/about/style5/about-14.png" alt="About">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="sec-title">
              <div id="main_content"></div>
              <!-- Services Start -->
              <div class="rs-services services-style19 pt-30 pb-40">
                <div id="sub_content" class="row">
                </div>
              </div>
              <!-- Services End -->
              <div id="btn-sinopsis" class="btn-part"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div id="rs-services" class="rs-services services-style18 services-modify1 gray-bg11 pt-115 pb-120 md-pt-75 md-pb-80">
      <div class="container">
        <div class="sec-title text-center mb-45">
          <span class="sub-text sub-text12">Layanan</span>
          <h2 class="title title5 white-color">Layanan kami</h2>
        </div>
        <div id="services_content" class="row y-middle justify-content-center">
          <div id="loader_layanan" class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Services End -->

    <!-- Pelanggan Text Start -->
    <div class="rs-testimonial testimonial-style9 testimonial-modify6 bg32 pt-120 md-pt-80 md-pb-80 sm-pb-60">
      <div class="container custom7">
        <div class="sec-title text-center mb-45">
          <span class="sub-text sub-text9">Tentang kami</span>
          <h2 class="title title5">Pelanggan kami</h2>
        </div>
      </div>
    </div>
    <!-- Pelanggan Text End -->

    <!-- Pelanggan Start -->
    <div class="rs-partner partner-main-home partner-modify10">
      <div class="container">
        <div class="partner-content-widget">
          <div class="customer-list owl-carousel">

          </div>
        </div>
      </div>
    </div>
    <!-- Pelanggan End -->

    <!-- Produk Start -->
    <div id="rs-blog" class="rs-blog blog-main-home blog-modify12 pt-120 pb-110 md-pt-80 md-pb-70">
      <div class="container mb-45">
        <div class="sec-title mb-45 text-center">
          <span class="sub-text sub-text9">Produk</span>
          <h2 class="title title7">Produk unggulan kami</h2>
          <div id="loader_product" class="spinner-border text-primary mt-5" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <div class="owl-carousel products">

        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div id="btn-sinopsis" class="btn-part">
              <button class="readon more orange-btn2" type="button" style="border:none;" onclick="open_modal()">Selengkapnya</button><!-- class="readon more read2" -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Produk End -->
  </div>
  <!-- Main content End -->

  <!-- Footer Start -->
  <x-footer :data="['data' => $data]" />
  <!-- Footer End -->

  <!-- start scrollUp  -->
  <div id="scrollUp" class="orange-color2">
    <i class="fa fa-angle-up"></i>
  </div>
  <!-- End scrollUp  -->

  <!-- Search Modal Start -->
  <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="search-block clearfix">
          <form>
            <div class="form-group">
              <input class="form-control" placeholder="Search Here..." type="text">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Search Modal End -->

  <!-- Modal -->
  <div class="modal fade" id="modal_pilihan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pilihan produk kami</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div id="modal_content" class="row justify-content-center">
            </div>
            <div id="loader_produk_pilihan" class="row justify-content-center ">
              <div class="spinner-border text-primary mt-3 mb-3" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <x-js-components :data="['data' => $data]" />

  <script>
    var token = '{{ csrf_token() }}';

    // async function slider_list() {
    //   let result;

    //   try {
    //     result = await $.ajax({
    //       url: "{{ route('sliders.list') }}",
    //       type: 'POST',
    //       data: {
    //         "_token": token
    //       }
    //     });

    //     let data = JSON.parse(result);
    //     var contents = [];
    //     $.each(data.data, function(key, val) {
    //       var appBaseUrl = "{{ url('/') }}";
    //       var link = appBaseUrl + "/" + val.button_link;
    //       var imageURL = "{{ config('global.API_URL') }}" + "upload/slider_images/" + val.slider_image;

    //       contents.push('<div class="slider-item" style="background-image: url(' + imageURL + ')">' +
    //         '<div class="container custom13">' +
    //         '<div class="slider-inner">' +
    //         '<div class="content-part text-left">' +
    //         '<span class="sl-subtitle wow fadeInDown">' + val.main_title + '</span>' +
    //         '<h1 class="sl-title wow fadeInLeft">' + val.sub_title + '</h1>' +
    //         '<div class="slider-bottom wow fadeinup">' +
    //         '<a class="readon more read2" href="' + link + '">' + val.button_text + '</a>' +
    //         '</div>' +
    //         '</div>' +
    //         '</div>' +
    //         '</div>' +
    //         '</div>');
    //     });

    //     $(".slider-slide-1").html(contents);

    //     if ($('.slider-slide-1').length) {
    //       $('.slider-slide-1').slick({
    //         autoplay: false,
    //         infinite: true,
    //         centerMode: false,
    //         arrows: true,
    //         dots: false,
    //         slidesToShow: 1,
    //         slidesToScroll: 1,
    //         responsive: [{
    //             breakpoint: 992,
    //             settings: {
    //               slidesToShow: 1,
    //               slidesToScroll: 1,
    //             }
    //           },
    //           {
    //             breakpoint: 991,
    //             settings: {
    //               slidesToShow: 1,
    //               slidesToScroll: 1,
    //             }
    //           },
    //           {
    //             breakpoint: 768,
    //             settings: {
    //               slidesToShow: 1,
    //               slidesToScroll: 1,
    //             }
    //           },
    //           {
    //             breakpoint: 480,
    //             settings: {
    //               slidesToShow: 1,
    //               slidesToScroll: 1,
    //             }
    //           }
    //           // You can unslick at a given breakpoint now by adding:
    //           // settings: "unslick"
    //           // instead of a settings object
    //         ]
    //       });
    //     }

    //   } catch (error) {
    //     Swal.fire(
    //       'Oops...',
    //       error.responseJSON.message,
    //       'info'
    //     );
    //   }
    // }

    // async function sinopsis_list() {
    //   let result;

    //   try {
    //     result = await $.ajax({
    //       url: "{{ route('sinopsis.list') }}",
    //       type: 'POST',
    //       data: {
    //         "_token": token
    //       }
    //     });

    //     let data = JSON.parse(result);
    //     var main_content = [];
    //     var sub_content = [];
    //     var main_item = [];
    //     var sub_item = [];
    //     var btn_link = [];
    //     main_content = data.data.filter(object => object.types == 'TEXT');
    //     sub_content = data.data.filter(object => object.types == 'IMAGES');

    //     //MAIN CONTENT
    //     $.each(main_content, function(key, val) {
    //       var appBaseUrl = "{{ url('/') }}";
    //       var link = appBaseUrl + "/" + val.link;

    //       main_item.push('<span class="sub-text sub-text9">Tentang kami</span>' +
    //         '<h2 class="title title7 pb-30">' + val.product_name + '</h2>' +
    //         '<p class="desc desc9 desc-small">' + val.product_desc + '</p>');

    //       btn_link.push('<a class="readon more orange-btn2" href="' + link + '">Lihat profil</a>');
    //     });

    //     $.each(sub_content, function(key, val) {
    //       var appBaseUrl = "{{ url('/') }}";
    //       var link = "'" + appBaseUrl + "/" + val.link + "'";
    //       var newTab = "'" + "_blank" + "'";
    //       var new_images = "{{ config('global.API_URL') }}" + "upload/sinopsis_images/" + val.product_images;

    //       sub_item.push('<div class="col-lg-6 md-mb-30">' +
    //         '<div class="services-item">' +
    //         '<div class="services-icon" onclick="window.open(' + link + ', ' + newTab + ')">' +
    //         '<img src="' + new_images + '" alt="{{ $data->data->nama }}">' +
    //         '</div>' +
    //         '<div class="services-text">' +
    //         '<h4 class="title">' + val.product_name + '</h4>' +
    //         '</div>' +
    //         '</div>' +
    //         '</div>');
    //     });

    //     $("#btn-sinopsis").html(btn_link);
    //     $("#main_content").html(main_item);
    //     $("#sub_content").html(sub_item);

    //   } catch (error) {
    //     Swal.fire(
    //       'Oops...',
    //       error.responseJSON.message,
    //       'info'
    //     );
    //   }
    // }

    // async function services_list() {
    //   let result;

    //   try {
    //     result = await $.ajax({
    //       url: "{{ route('services.list') }}",
    //       type: 'POST',
    //       data: {
    //         "_token": token
    //       }
    //     });

    //     let data = JSON.parse(result);
    //     var contents = [];
    //     $.each(data.data, function(key, val) {
    //       var new_images = "{{ config('global.API_URL') }}" + "upload/tag_images/" + val.icon;

    //       contents.push('<div class="col-xl-4 col-md-12 xl-mb-30">' +
    //         '<div class="services-item">' +
    //         '<div class="services-icon">' +
    //         '<img src="' + new_images + '" alt="Layanan ' + val.main_title + ' {{ $data->data->nama }} : ' + val.main_title + '">' +
    //         '</div>' +
    //         '<div class="services-text">' +
    //         '<h3 class="title">' + val.main_title + '</h3>' +
    //         '<p class="services-txt">' + val.sub_title + '</p>' +
    //         '</div>' +
    //         '</div>' +
    //         '</div>');
    //     });
    //     $("#loader_layanan").hide();
    //     $("#services_content").html(contents);
    //   } catch (error) {
    //     Swal.fire(
    //       'Oops...',
    //       error.responseJSON.message,
    //       'info'
    //     );
    //   }
    // }

    // async function customer_list() {
    //   let result;

    //   try {
    //     result = await $.ajax({
    //       url: "{{ route('customers.list') }}",
    //       type: 'POST',
    //       data: {
    //         "_token": token
    //       }
    //     });

    //     let data = JSON.parse(result);
    //     var contents = [];
    //     $.each(data.data, function(key, val) {
    //       var new_images = "{{ config('global.API_URL') }}" + "upload/pelanggan_images/" + val.logo;
    //       var company = "{{ $data->data->nama }}";

    //       contents.push('<div class="logo-img">' +
    //         '<a href="#">' +
    //         '<img class="hovers-logos rs-grid-img" src="' + new_images + '" title="" alt="Customer ' + company + '">' +
    //         '<img class="mains-logos rs-grid-img " src="' + new_images + '" title="" alt="Customer ' + company + '">' +
    //         '</a>' +
    //         '</div>');
    //     });

    //     $(".customer-list").html(contents);

    //     $('.customer-list').each(function() {
    //       var owlCarousel = $(this),
    //         loop = owlCarousel.data('loop'),
    //         items = owlCarousel.data('items'),
    //         margin = owlCarousel.data('margin'),
    //         stagePadding = owlCarousel.data('stage-padding'),
    //         autoplay = owlCarousel.data('autoplay'),
    //         autoplayTimeout = owlCarousel.data('autoplay-timeout'),
    //         smartSpeed = owlCarousel.data('smart-speed'),
    //         dots = owlCarousel.data('dots'),
    //         nav = owlCarousel.data('nav'),
    //         navSpeed = owlCarousel.data('nav-speed'),
    //         xsDevice = owlCarousel.data('mobile-device'),
    //         xsDeviceNav = owlCarousel.data('mobile-device-nav'),
    //         xsDeviceDots = owlCarousel.data('mobile-device-dots'),
    //         smDevice = owlCarousel.data('ipad-device'),
    //         smDeviceNav = owlCarousel.data('ipad-device-nav'),
    //         smDeviceDots = owlCarousel.data('ipad-device-dots'),
    //         smDevice2 = owlCarousel.data('ipad-device2'),
    //         smDeviceNav2 = owlCarousel.data('ipad-device-nav2'),
    //         smDeviceDots2 = owlCarousel.data('ipad-device-dots2'),
    //         mdDevice = owlCarousel.data('md-device'),
    //         centerMode = owlCarousel.data('center-mode'),
    //         HoverPause = owlCarousel.data('hoverpause'),
    //         mdDeviceNav = owlCarousel.data('md-device-nav'),
    //         mdDeviceDots = owlCarousel.data('md-device-dots');
    //       owlCarousel.owlCarousel({
    //         loop: true,
    //         items: (items ? items : 4),
    //         lazyLoad: true,
    //         center: (centerMode ? true : false),
    //         autoplayHoverPause: (HoverPause ? true : false),
    //         margin: 30,
    //         autoplay: (autoplay ? true : false),
    //         autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
    //         smartSpeed: (smartSpeed ? smartSpeed : 250),
    //         dots: (dots ? true : false),
    //         nav: (nav ? true : false),
    //         navText: ["<div class='nav-btn prev-slide'><i class='fa fa-angle-left fa-lg'></i></div>", "<div class='nav-btn next-slide'><i class='fa fa-angle-right fa-lg'></i></div>"],
    //         navSpeed: (navSpeed ? true : false),
    //         responsiveClass: true,
    //         responsive: {
    //           0: {
    //             items: (xsDevice ? xsDevice : 1),
    //             nav: true,
    //             dots: (xsDeviceDots ? true : false),
    //             center: false,
    //           },
    //           768: {
    //             items: (smDevice2 ? smDevice2 : 2),
    //             nav: (smDeviceNav2 ? true : false),
    //             dots: (smDeviceDots2 ? true : false),
    //             center: false,
    //           },
    //           992: {
    //             items: (smDevice ? smDevice : 3),
    //             nav: (smDeviceNav ? true : false),
    //             dots: (smDeviceDots ? true : false),
    //             center: false,
    //           },
    //           1200: {
    //             items: (mdDevice ? mdDevice : 5),
    //             nav: true,
    //             dots: (mdDeviceDots ? true : false),
    //           }
    //         }
    //       });
    //     });
    //   } catch (error) {
    //     Swal.fire(
    //       'Oops...',
    //       error.responseJSON.message,
    //       'info'
    //     );
    //   }
    // }

    // async function produk_list() {
    //   let result;

    //   try {
    //     result = await $.ajax({
    //       url: "{{ route('products.list') }}",
    //       type: 'POST',
    //       data: {
    //         "_token": token
    //       }
    //     });

    //     let data = JSON.parse(result);
    //     var contents = [];
    //     $.each(data.data, function(key, val) {
    //       var new_images = "{{ config('global.API_URL') }}" + "upload/produk_images/" + val.images;
    //       var local_url = "{{ url('/') }}" + "/view/" + val.slug;

    //       contents.push('<div class="blog-item">' +
    //         '<div class="image-wrap">' +
    //         '<a href="' + local_url + '">' +
    //         '<img src="' + new_images + '" alt="Produk {{ $data->data->nama }} : ' + val.nama_produk + '">' +
    //         '</a>' +
    //         '</div>' +
    //         '<div class="blog-content">' +
    //         '<ul class="blog-meta">' +
    //         '<li class="date">' +
    //         '<i class="fa fa-inbox"></i>' + val.jenis_produk +
    //         '</li>' +
    //         '</ul>' +
    //         '<h3 class="blog-title">' +
    //         '<a href="' + local_url + '">' + val.nama_produk + '</a>' +
    //         '</h3>' +
    //         '</div>' +
    //         '</div>');
    //     });

    //     $("#loader_product").hide();
    //     $(".products").html(contents);

    //     $('.products').each(function() {
    //       var owlCarousel = $(this),
    //         loop = owlCarousel.data('loop'),
    //         items = owlCarousel.data('items'),
    //         margin = owlCarousel.data('margin'),
    //         stagePadding = owlCarousel.data('stage-padding'),
    //         autoplay = owlCarousel.data('autoplay'),
    //         autoplayTimeout = owlCarousel.data('autoplay-timeout'),
    //         smartSpeed = owlCarousel.data('smart-speed'),
    //         dots = owlCarousel.data('dots'),
    //         nav = owlCarousel.data('nav'),
    //         navSpeed = owlCarousel.data('nav-speed'),
    //         xsDevice = owlCarousel.data('mobile-device'),
    //         xsDeviceNav = owlCarousel.data('mobile-device-nav'),
    //         xsDeviceDots = owlCarousel.data('mobile-device-dots'),
    //         smDevice = owlCarousel.data('ipad-device'),
    //         smDeviceNav = owlCarousel.data('ipad-device-nav'),
    //         smDeviceDots = owlCarousel.data('ipad-device-dots'),
    //         smDevice2 = owlCarousel.data('ipad-device2'),
    //         smDeviceNav2 = owlCarousel.data('ipad-device-nav2'),
    //         smDeviceDots2 = owlCarousel.data('ipad-device-dots2'),
    //         mdDevice = owlCarousel.data('md-device'),
    //         centerMode = owlCarousel.data('center-mode'),
    //         HoverPause = owlCarousel.data('hoverpause'),
    //         mdDeviceNav = owlCarousel.data('md-device-nav'),
    //         mdDeviceDots = owlCarousel.data('md-device-dots');
    //       owlCarousel.owlCarousel({
    //         loop: true,
    //         items: 4,
    //         lazyLoad: true,
    //         center: (centerMode ? true : false),
    //         autoplayHoverPause: (HoverPause ? true : false),
    //         margin: 30,
    //         autoplay: (autoplay ? true : false),
    //         autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
    //         smartSpeed: (smartSpeed ? smartSpeed : 250),
    //         dots: (dots ? true : false),
    //         nav: true,
    //         navText: ["<div class='nav-btn prev-slide'><i class='fa fa-angle-left fa-lg'></i></div>", "<div class='nav-btn next-slide'><i class='fa fa-angle-right fa-lg'></i></div>"],
    //         navSpeed: (navSpeed ? true : false),
    //         responsiveClass: true,
    //         responsive: {
    //           0: {
    //             items: (xsDevice ? xsDevice : 1),
    //             nav: true,
    //             dots: (xsDeviceDots ? true : false),
    //             center: false,
    //           },
    //           768: {
    //             items: (smDevice2 ? smDevice2 : 2),
    //             nav: true,
    //             dots: (smDeviceDots2 ? true : false),
    //             center: false,
    //           },
    //           992: {
    //             items: (smDevice ? smDevice : 3),
    //             nav: true,
    //             dots: (smDeviceDots ? true : false),
    //             center: false,
    //           },
    //           1200: {
    //             items: 4,
    //             nav: true,
    //             dots: (mdDeviceDots ? true : false),
    //           }
    //         }
    //       });
    //     });
    //   } catch (error) {
    //     Swal.fire(
    //       'Oops...',
    //       error.responseJSON.message,
    //       'info'
    //     );
    //   }
    // }

    function open_modal() {
      $('#modal_pilihan').modal('show');
      $.ajax({
        data: {
          "_token": token
        },
        url: "{{ route('sinopsis.list') }}",
        type: "POST",
        dataType: "JSON",
        beforeSend: function() {
          $("#loader_produk_pilihan").show();
        },
        success: function(data, textStatus, xhr) {
          let content = [];
          let result = data.data.filter(object => object.types == 'IMAGES');
          let column = 12 / result.length;

          $.each(result, function(key, val) {
            var local_url = "'" + "{{ url('/') }}" + "/" + val.link + "'";

            content.push('<div class="col-sm-' + column + ' text-center">' +
              '<button type="button" class="readon more read2" onclick="window.location.href=' + local_url + '">' + val.product_name + '</button>' +
              '</div>');
          });

          $("#modal_content").html(content);
          $("#loader_produk_pilihan").hide();
        },
        error: function(jqXHR, textStatus, errorThrown) {
          Swal.fire({
            title: 'Oops...',
            text: jqXHR.responseJSON.message,
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Refresh token',
            allowOutsideClick: false,
            footer: '<small>Klik tombol refresh token untuk mendapatkan token terbaru</small>'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.reload();
            }
          })
          // Swal.fire(
          //   'Oops...',
          //   jqXHR.responseJSON.message,
          //   textStatus
          // );
        }
      });
    }

    $(document).ready(function() {
      //slider_list();
      //produk_list();
      //customer_list();
      //services_list();
      //sinopsis_list();

      $.getJSON("{{ route('sliders.list') }}", function(data) {
        //console.log(data);
        var contents = [];
        $.each(data.data, function(key, val) {
          var appBaseUrl = "{{ url('/') }}";
          var link = appBaseUrl + "/" + val.button_link;
          var imageURL = "{{ config('global.API_URL') }}" + "upload/slider_images/" + val.slider_image;

          contents.push('<div class="slider-item" style="background-image: url(' + imageURL + ')">' +
            '<div class="container custom13">' +
            '<div class="slider-inner">' +
            '<div class="content-part text-left">' +
            '<span class="sl-subtitle wow fadeInDown">' + val.main_title + '</span>' +
            '<h1 class="sl-title wow fadeInLeft">' + val.sub_title + '</h1>' +
            '<div class="slider-bottom wow fadeinup">' +
            '<a class="readon more read2" href="' + link + '">' + val.button_text + '</a>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>');
        });

        $(".slider-slide-1").html(contents);

        if ($('.slider-slide-1').length) {
          $('.slider-slide-1').slick({
            autoplay: false,
            infinite: true,
            centerMode: false,
            arrows: true,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 992,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
              },
              {
                breakpoint: 991,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });
        }
      });

      $.getJSON("{{ route('products.list') }}", function(data) {
        var contents = [];
        $.each(data.data, function(key, val) {
          var new_images = "{{ config('global.API_URL') }}" + "upload/produk_images/" + val.images;
          var local_url = "{{ url('/') }}" + "/view/" + val.slug;

          contents.push('<div class="blog-item">' +
            '<div class="image-wrap">' +
            '<a href="' + local_url + '">' +
            '<img src="' + new_images + '" alt="Produk {{ $data->data->nama }} : ' + val.nama_produk + '">' +
            '</a>' +
            '</div>' +
            '<div class="blog-content">' +
            '<ul class="blog-meta">' +
            '<li class="date">' +
            '<i class="fa fa-inbox"></i>' + val.jenis_produk +
            '</li>' +
            '</ul>' +
            '<h3 class="blog-title">' +
            '<a href="' + local_url + '">' + val.nama_produk + '</a>' +
            '</h3>' +
            '</div>' +
            '</div>');
        });

        $("#loader_product").hide();
        $(".products").html(contents);

        $('.products').each(function() {
          var owlCarousel = $(this),
            loop = owlCarousel.data('loop'),
            items = owlCarousel.data('items'),
            margin = owlCarousel.data('margin'),
            stagePadding = owlCarousel.data('stage-padding'),
            autoplay = owlCarousel.data('autoplay'),
            autoplayTimeout = owlCarousel.data('autoplay-timeout'),
            smartSpeed = owlCarousel.data('smart-speed'),
            dots = owlCarousel.data('dots'),
            nav = owlCarousel.data('nav'),
            navSpeed = owlCarousel.data('nav-speed'),
            xsDevice = owlCarousel.data('mobile-device'),
            xsDeviceNav = owlCarousel.data('mobile-device-nav'),
            xsDeviceDots = owlCarousel.data('mobile-device-dots'),
            smDevice = owlCarousel.data('ipad-device'),
            smDeviceNav = owlCarousel.data('ipad-device-nav'),
            smDeviceDots = owlCarousel.data('ipad-device-dots'),
            smDevice2 = owlCarousel.data('ipad-device2'),
            smDeviceNav2 = owlCarousel.data('ipad-device-nav2'),
            smDeviceDots2 = owlCarousel.data('ipad-device-dots2'),
            mdDevice = owlCarousel.data('md-device'),
            centerMode = owlCarousel.data('center-mode'),
            HoverPause = owlCarousel.data('hoverpause'),
            mdDeviceNav = owlCarousel.data('md-device-nav'),
            mdDeviceDots = owlCarousel.data('md-device-dots');
          owlCarousel.owlCarousel({
            loop: true,
            items: 4,
            lazyLoad: true,
            center: (centerMode ? true : false),
            autoplayHoverPause: (HoverPause ? true : false),
            margin: 30,
            autoplay: (autoplay ? true : false),
            autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
            smartSpeed: (smartSpeed ? smartSpeed : 250),
            dots: (dots ? true : false),
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fa fa-angle-left fa-lg'></i></div>", "<div class='nav-btn next-slide'><i class='fa fa-angle-right fa-lg'></i></div>"],
            navSpeed: (navSpeed ? true : false),
            responsiveClass: true,
            responsive: {
              0: {
                items: (xsDevice ? xsDevice : 1),
                nav: true,
                dots: (xsDeviceDots ? true : false),
                center: false,
              },
              768: {
                items: (smDevice2 ? smDevice2 : 2),
                nav: true,
                dots: (smDeviceDots2 ? true : false),
                center: false,
              },
              992: {
                items: (smDevice ? smDevice : 3),
                nav: true,
                dots: (smDeviceDots ? true : false),
                center: false,
              },
              1200: {
                items: 4,
                nav: true,
                dots: (mdDeviceDots ? true : false),
              }
            }
          });
        });
      });

      $.getJSON("{{ route('customers.list') }}", function(data) {
        var contents = [];
        $.each(data.data, function(key, val) {
          var new_images = "{{ config('global.API_URL') }}" + "upload/pelanggan_images/" + val.logo;
          var company = "{{ $data->data->nama }}";

          contents.push('<div class="logo-img">' +
            '<a href="#">' +
            '<img class="hovers-logos rs-grid-img" src="' + new_images + '" title="" alt="Customer ' + company + '">' +
            '<img class="mains-logos rs-grid-img " src="' + new_images + '" title="" alt="Customer ' + company + '">' +
            '</a>' +
            '</div>');
        });

        $(".customer-list").html(contents);

        $('.customer-list').each(function() {
          var owlCarousel = $(this),
            loop = owlCarousel.data('loop'),
            items = owlCarousel.data('items'),
            margin = owlCarousel.data('margin'),
            stagePadding = owlCarousel.data('stage-padding'),
            autoplay = owlCarousel.data('autoplay'),
            autoplayTimeout = owlCarousel.data('autoplay-timeout'),
            smartSpeed = owlCarousel.data('smart-speed'),
            dots = owlCarousel.data('dots'),
            nav = owlCarousel.data('nav'),
            navSpeed = owlCarousel.data('nav-speed'),
            xsDevice = owlCarousel.data('mobile-device'),
            xsDeviceNav = owlCarousel.data('mobile-device-nav'),
            xsDeviceDots = owlCarousel.data('mobile-device-dots'),
            smDevice = owlCarousel.data('ipad-device'),
            smDeviceNav = owlCarousel.data('ipad-device-nav'),
            smDeviceDots = owlCarousel.data('ipad-device-dots'),
            smDevice2 = owlCarousel.data('ipad-device2'),
            smDeviceNav2 = owlCarousel.data('ipad-device-nav2'),
            smDeviceDots2 = owlCarousel.data('ipad-device-dots2'),
            mdDevice = owlCarousel.data('md-device'),
            centerMode = owlCarousel.data('center-mode'),
            HoverPause = owlCarousel.data('hoverpause'),
            mdDeviceNav = owlCarousel.data('md-device-nav'),
            mdDeviceDots = owlCarousel.data('md-device-dots');
          owlCarousel.owlCarousel({
            loop: true,
            items: (items ? items : 4),
            lazyLoad: true,
            center: (centerMode ? true : false),
            autoplayHoverPause: (HoverPause ? true : false),
            margin: 30,
            autoplay: (autoplay ? true : false),
            autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
            smartSpeed: (smartSpeed ? smartSpeed : 250),
            dots: (dots ? true : false),
            nav: (nav ? true : false),
            navText: ["<div class='nav-btn prev-slide'><i class='fa fa-angle-left fa-lg'></i></div>", "<div class='nav-btn next-slide'><i class='fa fa-angle-right fa-lg'></i></div>"],
            navSpeed: (navSpeed ? true : false),
            responsiveClass: true,
            responsive: {
              0: {
                items: (xsDevice ? xsDevice : 1),
                nav: true,
                dots: (xsDeviceDots ? true : false),
                center: false,
              },
              768: {
                items: (smDevice2 ? smDevice2 : 2),
                nav: (smDeviceNav2 ? true : false),
                dots: (smDeviceDots2 ? true : false),
                center: false,
              },
              992: {
                items: (smDevice ? smDevice : 3),
                nav: (smDeviceNav ? true : false),
                dots: (smDeviceDots ? true : false),
                center: false,
              },
              1200: {
                items: (mdDevice ? mdDevice : 5),
                nav: true,
                dots: (mdDeviceDots ? true : false),
              }
            }
          });
        });
      });

      $.getJSON("{{ route('services.list') }}", function(data) {
        var contents = [];
        $.each(data.data, function(key, val) {
          var new_images = "{{ config('global.API_URL') }}" + "upload/tag_images/" + val.icon;

          contents.push('<div class="col-xl-4 col-md-12 xl-mb-30">' +
            '<div class="services-item">' +
            '<div class="services-icon">' +
            '<img src="' + new_images + '" alt="Layanan ' + val.main_title + ' {{ $data->data->nama }} : ' + val.main_title + '">' +
            '</div>' +
            '<div class="services-text">' +
            '<h3 class="title">' + val.main_title + '</h3>' +
            '<p class="services-txt">' + val.sub_title + '</p>' +
            '</div>' +
            '</div>' +
            '</div>');
        });

        $("#loader_layanan").hide();
        $("#services_content").html(contents);
      });

      $.getJSON("{{ route('sinopsis.list') }}", function(data) {

        var main_content = [];
        var sub_content = [];
        var main_item = [];
        var sub_item = [];
        var btn_link = [];

        main_content = data.data.filter(object => object.types == 'TEXT');
        sub_content = data.data.filter(object => object.types == 'IMAGES');
        console.log(main_content);
        console.log(sub_content);

        //MAIN CONTENT
        $.each(main_content, function(key, val) {
          var appBaseUrl = "{{ url('/') }}";
          var link = appBaseUrl + "/" + val.link;

          main_item.push('<span class="sub-text sub-text9">Tentang kami</span>' +
            '<h2 class="title title7 pb-30">' + val.product_name + '</h2>' +
            '<p class="desc desc9 desc-small">' + val.product_desc + '</p>');

          btn_link.push('<a class="readon more orange-btn2" href="' + link + '">Lihat profil</a>');
        });

        $.each(sub_content, function(key, val) {
          var appBaseUrl = "{{ url('/') }}";
          var link = "'" + appBaseUrl + "/" + val.link + "'";
          var newTab = "'" + "_blank" + "'";
          var new_images = "{{ config('global.API_URL') }}" + "upload/sinopsis_images/" + val.product_images;

          sub_item.push('<div class="col-lg-6 md-mb-30">' +
            '<div class="services-item">' +
            '<div class="services-icon" onclick="window.open(' + link + ', ' + newTab + ')">' +
            '<img src="' + new_images + '" alt="{{ $data->data->nama }}">' +
            '</div>' +
            '<div class="services-text">' +
            '<h4 class="title">' + val.product_name + '</h4>' +
            '</div>' +
            '</div>' +
            '</div>');
        });

        $("#btn-sinopsis").html(btn_link);
        $("#main_content").html(main_item);
        $("#sub_content").html(sub_item);
        //});
      });

    });
  </script>
</body>

</html>