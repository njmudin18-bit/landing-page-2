<footer id="rs-footer" class="rs-footer footer-main-home footer-style11">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 pr-20 md-pr-15 md-mb-20">
          <div class="footer-logo mb-51 md-mb-30">
            <a href="{{ url('/') }}">
              <img class="footer-logo" src="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->logo_name }}" alt="Logo - {{ $data->data->nama }}">
            </a>
          </div>
          <div class="textwidget">
            <p class="pb-20">{{ config('global.perusahaan_attributes.company_desc') }}</p>
            <p class="pb-25"><strong>Jam operasional</strong> : <br>
              Senin - Jum'at: 07:00 - 17:00 WIB<br>
              Sabtu : 07:00 - 13:00 WIB
            </p>
          </div>
        </div>
        <div class="col-lg-2 md-mb-10">
          <h3 class="footer-title">Menu</h3>
          <ul class="site-map">
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li>
              <a href="#">Tentang Kami</a>
              <ul class="list-unstyles">
                <li class="mb-2"><a class="text-white" href="{{ url('/company-profile') }}">Profil perusahaan</a></li>
                <li class="mb-2"><a class="text-white" href="{{ url('/visi-dan-misi') }}">Visi dan Misi</a></li>
                <li class="mb-2"><a class="text-white" href="{{ url('/our-customer') }}">Pelanggan kami</a></li>
                <li class="mb-2"><a class="text-white" href="{{ url('/our-machine') }}">Mesin kami</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/career') }}">Karir</a></li>
            <li><a href="{{ url('/contact-us') }}">Kontak kami</a></li>
          </ul>
        </div>
        <div class="col-lg-2 md-mb-10">
          <h3 class="footer-title">Produk kami</h3>
          <ul class="site-map">
            <li><a href="{{ url('/rubber') }}">Rubber</a></li>
            <li><a href="{{ url('/silicone') }}">Silicone</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h3 class="footer-title">Terhubung Dengan Kami</h3>
          <ul class="address-widget">
            <li>
              <i class="fi fi-rr-map-marker-home"></i>
              <div class="desc">
                <a href="https://goo.gl/maps/Bq2fHvgPhavFJMcM8" target="_blank">
                  {{ $data->data->alamat }}
                </a>
              </div>
            </li>
            <li>
              <i class="fi fi-rr-phone-call"></i>
              <div class="desc">
                <a href="tel:{{ $data->data->telepon }}">Telp. {{ $data->data->telepon }}</a><br>
                <a href="tel:{{ $data->data->fax }}">Fax. {{ $data->data->fax }}</a>
              </div>
            </li>
            <li>
              <i class="fi fi-rr-envelope-plus"></i>
              <div class="desc">
                <a href="mailto:{{ $data->data->email }}">{{ $data->data->email }}</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">                    
      <div class="row y-middle">
        <div class="col-lg-12">
          <div class="copyright text-lg-start">
            <p class="text-center">&copy; Copyright {{ date('Y'); }} {{ $data->data->nama }} - All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>