<!-- WA ELEMENT -->
<div id="myButton"></div>

<!-- modernizr js -->
<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
<!-- jquery latest version -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- op nav js -->
<script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Skill bar js -->
<script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
<!-- imagesloaded js -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- waypoints.min js -->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- counterup.min js -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script> 
<!-- contact form js -->
<script src="{{ asset('assets/js/contact.form.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- WA CHAT -->
<script type="text/javascript" src="{{ asset('assets/vendor/floating-whatsapp-master/floating-wpp.js') }}"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBXB8QJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript">
  $(function() {
    $('#myButton').floatingWhatsApp({
      phone: "{{ $data->data->handphone }}",
      popupMessage: 'Hi, ada yang bisa kami bantu?',
      message: "Hi, saya ingin bertanya mengenai produk PT. MAiN",
      showPopup: true,
      showOnIE: false,
      headerTitle: 'Selamat Datang!',
      headerColor: '#008069',
      backgroundColor: '#008069',
      buttonImage: '<img src="{{ asset('assets/vendor/floating-whatsapp-master/whatsapp.svg') }}" />'
    });
  });
</script>