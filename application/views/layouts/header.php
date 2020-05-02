    <!-- header-start -->
    <header>
      <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
          <div class="container-fluid p-0">
            <div class="row align-items-center no-gutters">
              <div class="col-xl-2 col-lg-2">
                <div class="logo-img">
                  <a href="<?= base_url();?>">
                    <img src="<?= base_url();?>assets/img/source/main-logo.svg" style="width: 126px; height: auto;" alt="">
                  </a>
                </div>
              </div>
              <div class="col-xl-7 col-lg-7">
                <div class="main-menu  d-none d-lg-block">
                  <nav>
                    <ul id="navigation">
                      <li><a class="<?php if($this->uri->segment(1) == ''){ echo 'active'; }?>" href="<?= base_url();?>">Home</a></li>
                      <li><a class="<?php if($this->uri->segment(1) == 'harga-paket'){ echo 'active'; }?>" href="<?= base_url();?>harga-paket">Harga Paket</a></li>
                      <li><a class="<?php if($this->uri->segment(1) == 'artikel' || $this->uri->segment(1) == 'artikel-detail'){ echo 'active'; }?>" href="<?= base_url();?>artikel">Artikel</a></li>
                      <li><a class="<?php if($this->uri->segment(1) == 'tentang-kami'){ echo 'active'; }?>" href="<?= base_url();?>tentang-kami">Tentang Kami</a></li>
                      <li><a class="<?php if($this->uri->segment(1) == 'hubungi-kami'){ echo 'active'; }?>" href="<?= base_url();?>hubungi-kami">Hubungi Kami</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                <div class="log_chat_area d-flex align-items-center">
                  <!-- <a href="#test-form" class="login popup-with-form">
                    <i class="flaticon-user"></i>
                    <span>log in</span>
                  </a> -->
                  <div class="live_chat_btn">
                    <a class="boxed_btn_green" href="https://wa.me/6281331897748?text=Hi%2C%20saya%20ingin%20mendapatkan%20informasi%20mengenai%20produk%20Indihome%20Fiber" target="__blank">
                      <i class="flaticon-chat"></i>
                      <span>Live Chat</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header-end -->