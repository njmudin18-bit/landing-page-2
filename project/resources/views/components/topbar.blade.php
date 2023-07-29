<div class="toolbar-area topbar-style1 topber-modify6 hidden-md">
  <div class="container">
    <div class="row rs-vertical-middle">
        <div class="col-lg-7">
        <div class="toolbar-contact">
          <ul class="rs-contact-info">                   
            <li>
              <i class="fi fi-rr-envelope-plus"></i>                  
              <a href="mailto:{{ $data->data->email }}">{{ $data->data->email }}</a>               
            </li>
            <li>
              <i class="fi fi-rr-phone-call"></i>                                      
              <a href="mailto:{{ $data->data->telepon }}">{{ $data->data->telepon }}</a>             
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="toolbar-sl-share">
          <ul class="clearfix">
            <li class="opening"> 
              <a href="https://goo.gl/maps/Bq2fHvgPhavFJMcM8" target="_blank">
                <em><i class="fi-rr-map-marker-home"></i> {{ $data->data->alamat }}</em>
              </a> 
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>