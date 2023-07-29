<div class="menu-area menu-sticky">
  <div class="container">
    <div class="row-table">
      <div class="col-cell header-logo">                                  
        <div class="logo-area">
          <a href="{{ url('/') }}">
            <img class="normal-logo" src="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->logo_name }}" alt="Logo {{ $data->data->nama }}">  
            <img class="sticky-logo" src="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->logo_name }}" alt="Logo {{ $data->data->nama }}">
          </a>
        </div>
      </div>
      <div class="col-cell">
        <div class="rs-menu-area">
          <div class="main-menu">
            <nav class="rs-menu hidden-md">
              <ul class="nav-menu">
                <li class="{{ (request()->is('/')) ? 'current-menu-item' : '' }}">
                  <a href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="menu-item-has-children {{ (request()->is('our-customer')) || (request()->is('visi-dan-misi')) || (request()->is('company-profile')) || (request()->is('our-machine')) ? 'current-menu-item' : '' }}">
                  <a href="#">Tentang kami</a>
                  <ul class="sub-menu">
                    <li class="{{ (request()->is('company-profile')) ? 'active' : '' }}"><a href="{{ url('/company-profile') }}">Profil perusahaan</a></li>
                    <li class="{{ (request()->is('visi-dan-misi')) ? 'active' : '' }}"><a href="{{ url('/visi-dan-misi') }}">Visi dan Misi</a></li>
                    <li class="{{ (request()->is('our-customer')) ? 'active' : '' }}"><a href="{{ url('/our-customer') }}">Pelanggan kami</a></li>
                    <li class="{{ (request()->is('our-machine')) ? 'active' : '' }}"><a href="{{ url('/our-machine') }}">Mesin kami</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children {{ (request()->is('rubber')) || (request()->is('silicone')) ? 'current-menu-item' : '' }}">
                  <a href="#">Produk</a>
                  <ul class="sub-menu">
                    <li class="{{ (request()->is('rubber')) ? 'active' : '' }}"><a href="{{ url('/rubber') }}">Rubber</a></li>
                    <li class="{{ (request()->is('silicone')) ? 'active' : '' }}"><a href="{{ url('/silicone') }}">Silicone</a></li>
                  </ul>
                </li>
                <li class="{{ (request()->is('career')) ? 'current-menu-item' : '' }}">
                  <a href="{{ url('/career') }}">Karir</a>
                </li>
                <li class="{{ (request()->is('contact-us')) ? 'current-menu-item' : '' }}">
                  <a href="{{ url('/contact-us') }}">Kontak kami</a>
                </li>
              </ul> <!-- //.nav-menu -->
            </nav>
          </div> <!-- //.main-menu -->
        </div>
      </div>
      <div class="col-cell">
        <div class="expand-btn-inner">
          <ul>
            <li class="humburger">
              <a id="nav-expander" class="nav-expander bar" href="#">
                <div class="bar">
                  <span class="dot1"></span>
                  <span class="dot2"></span>
                  <span class="dot3"></span>
                  <span class="dot4"></span>
                  <span class="dot5"></span>
                  <span class="dot6"></span>
                  <span class="dot7"></span>
                  <span class="dot8"></span>
                  <span class="dot9"></span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>