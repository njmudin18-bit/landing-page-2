<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
  <div class="close-btn">
    <a id="nav-close2" class="nav-close">
      <div class="line">
        <span class="line1"></span>
        <span class="line2"></span>
      </div>
    </a>
  </div>
  <ul class="nav-menu">
    <li class="menu-item-has-children">
      <a href="{{ url('/') }}">Beranda</a>
    </li>
    <li class="menu-item-has-children">
      <a href="#">Tentang kami</a>
      <ul class="sub-menu">
        <li><a href="{{ url('/company-profile') }}">Profil perusahaan</a></li>
        <li><a href="{{ url('/visi-dan-misi') }}">Visi dan Misi</a></li>
        <li><a href="{{ url('/our-customer') }}">Pelanggan kami</a></li>
        <li><a href="{{ url('/our-machine') }}">Mesin kami</a></li>
      </ul>
    </li>
    <li class="menu-item-has-children">
      <a href="#">Produk kami</a>
      <ul class="sub-menu">
        <li><a href="{{ url('/rubber') }}">Rubber</a></li>
        <li><a href="{{ url('/silicone') }}">Silicone</a></li>
      </ul>
    </li>
    <li>
      <a href="{{ url('/career') }}">Karir</a>
    </li>
    <li>
      <a href="{{ url('/contact-us') }}">Kontak kami</a>
    </li>
  </ul> 
  <!-- //.nav-menu -->
  
  <!-- //.nav-menu -->
  <div class="canvas-contact">
    <div class="address-area">
      <div class="address-list">
        <div class="info-icon">
          <i class="fi fi-rr-map-marker-home"></i>
        </div>
        <div class="info-content">
          <h4 class="title">Contact</h4>
          <em><a href="https://goo.gl/maps/Bq2fHvgPhavFJMcM8" target="_blank">{{ $data->data->alamat }}.</a></em>
        </div>
      </div>
      <div class="address-list">
        <div class="info-icon">
          <i class="fi fi-rr-envelope-plus"></i>
        </div>
        <div class="info-content">
          <h4 class="title">Email</h4>
          <em><a href="mailto:{{ $data->data->email }}">{{ $data->data->email }}</a></em>
        </div>
      </div>
      <div class="address-list">
        <div class="info-icon">
          <i class="fi fi-rr-phone-call"></i>
        </div>
        <div class="info-content">
          <h4 class="title">Telepon</h4>
          <em><a href="tel:{{ $data->data->telepon }}">{{ $data->data->telepon }}</a></em>
        </div>
      </div>
    </div>
  </div>
</nav>