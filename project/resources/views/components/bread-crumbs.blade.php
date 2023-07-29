<?php
$image_bc = config('global.API_URL') . 'upload/profile_header_images/' . $data->data->images;
?>
<div class="rs-breadcrumbs" style="background-image: url('{{ $image_bc }}')">
  <div class="container-fluid overlay overlay_2">
    <div class="breadcrumbs-inner">
      <h1 class="page-title">{{ $data->data->nama }}</h1>
      <ul class="breadcrumbs-area">
        <li title="kembali ke Beranda">
          <a class="active" href="{{ url('/') }}">Beranda</a>
        </li>
        <li>{{ $data->data->nama }}</li>
      </ul>
    </div>
  </div>
</div>