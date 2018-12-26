<?php $this->load->view("admin/_partials/modal.php") ?>
<header class="header-wrapper header-v2">
      <div class="topbar clearfix">
        <div class="container">
          <ul class="topbar-left">
            <li class="phoneNo"><i class="fa fa-phone"></i>0123 45678910</li>
            <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
              <a href="mailto:cs@yourdomain.com">info@yourdomain.com</a>
            </li>
          </ul>
          <ul class="topbar-right">
            <li class="LanguageList"><i class="fa fa-globe" aria-hidden="true"></i>
              <select name="guiest_id3" id="guiest_id3" class="select-drop">
                <option value="0"> Language</option>
                <option value="1">English</option>
                <option value="2">Spanish</option>
                <option value="3">Russian</option>
                <option value="4">German</option>
                <option value="4">Indonesia</option>
              </select>
            </li>
            <li>
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              <a href='<?php echo base_url('user/login_view'); ?>'>Login</a><span>/</span>
              <a href='<?php echo base_url('user/'); ?>'>  Register</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="header clearfix">
        <nav class="navbar navbar-main navbar-default">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="header_inner">

                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo clearfix" href='<?php echo base_url('')?>'><img src="img/home/carlogo.jpg" alt="" class="img-responsive" /></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="<?php echo base_url('')?>">Home</a></li>
                      <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daftar Mobil</a>
                        <ul class="dropdown-menu">
                        <li><a href="about.html">Honda</a></li>
                        <li><a href="about.html">Toyota</a></li>
                        <li><a href="about.html">Suzuki</a></li>
                        <li><a href="about.html">Daihatsu</a></li>
                        <li><a href="about.html">Nissan</a></li>
                        <li><a href="about.html">KIA</a></li>
                        <li><a href="about.html">BMW</a></li>
                        <li><a href="about.html">Isuzu</a></li>
                        </ul>
                      </li>
                      <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lokasi Cab. Rental</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DKI Jakarta</a>
                            <ul class="dropdown-menu">
                              <li><a href='#mjakartapusat' data-toggle="modal">Jakarta Pusat</a></li>
                              <li><a href='#mjakartaselatan' data-toggle="modal">Jakarta Selatan</a></li>
                              <li><a href='#mjakartatimur' data-toggle="modal">Jakarta Timur</a></li>
                              <li><a href='#mjakartabarat' data-toggle="modal">Jakarta Barat</a></li>
                              <li><a href='#mjakartautara' data-toggle="modal">Jakarta Utara</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jawa Tengah</a>
                            <ul class="dropdown-menu">
                              <li><a href='#msemarang' data-toggle="modal">Semarang</a></li>
                              <li><a href='#mkendal' data-toggle="modal">Kendal</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jawa Barat</a>
                            <ul class="dropdown-menu">
                              <li><a href='#mbandung' data-toggle="modal">Bandung</a></li>
                              <li><a href='#mcirebon' data-toggle="modal">Cirebon</a></li>
                            </ul>
                          </li>
                          <li><a href='#mbanten' data-toggle="modal">Banten</a></li>
                          <li><a href='#mbali' data-toggle="modal">Bali</a></li>
                          <li><a href='#sulteng' data-toggle="modal">Sulawesi Tengah</a></li>
                          <li><a href='#diy' data-toggle="modal">Daerah Istimewa Yogyakarta</a></li>
                          <li><a href='#kalteng' data-toggle="modal">Kalimantan Tengah</a></li>
                          <li><a href='#msumut' data-toggle="modal">Sumatra Utara</a></li>
                          <li><a href='#mpapua' data-toggle="modal">Papua</a></li>
                        </ul>
                      </li>
                      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us</a></li>
                      <!--
                      <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">=</a>
                        <ul class="dropdown-menu">
                          <li><a href="events-3col.html">Events 3 Columns</a></li>
                          <li><a href="events-right-sidebar.html">Events Sidebar Right</a></li>
                          <li><a href="events-left-sidebar.html">Events Sidebar Left</a></li>
                          <li><a href="single-events.html">Single Event</a></li>
                          <li><a href="events-calendar.html">Events Callender</a></li>
                        </ul>
                      </li> -->
                    </ul>
                  </div> 
<!--
                  <div class="cart-dropdown">
                    <a href="cart.html" class="shop-cart">
                      <i class="fa fa-shopping-cart"></i>
                      <span class="badge">3</span>
                    </a>
                  </div>
-->

                </div>
              </div>
            </div>
          </div><!-- /.container -->
        </nav><!-- navbar -->
      </div>
    </header>