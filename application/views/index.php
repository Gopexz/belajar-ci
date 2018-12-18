<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GoRent - Car Rent</title>

  <!-- PLUGINS CSS STYLE -->
  <link rel="icon" type="image/png" href="img/favicon.png">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/selectbox/select_option1.css">
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="plugins/flexslider/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="plugins/calender/fullcalendar.min.css">
  <link rel="stylesheet" href="plugins/animate.css">
  <link rel="stylesheet" href="plugins/pop-up/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">

  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="car-makes-icons/dist/style.css">
  <link rel="stylesheet" href="css/default.css" id="option_color">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="body-wrapper version2 @@bodyClass">

  <div class="main_wrapper">

    <!-- HEADER -->
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
              </select>
            </li>
            <li>
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              <a href='<?php echo base_url('user/login_view'); ?>' data-toggle="modal" >Login</a><span>/</span>
              <a href='<?php echo base_url('user/'); ?>' data-toggle="modal">  Register</a>
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
                    <a class="navbar-brand logo clearfix" href=""><img src="img/home/carlogo.jpg" alt="" class="img-responsive" /></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="index.html">Home</a></li>
                      <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daftar Mobil</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses Grid Version1</a>
                            <ul class="dropdown-menu">
                              <li><a href="course-grid-3col.html">3 Columns</a></li>
                              <li><a href="course-grid-4col.html">4 Columns</a></li>
                              <li><a href="course-grid-sidebar-right.html">Sidebar Right</a></li>
                              <li><a href="course-grid-sidebar-left.html">Sidebar Left</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses Grid Version2</a>
                            <ul class="dropdown-menu">
                              <li><a href="course-grid-version2-4col.html">4 Columns</a></li>
                              <li><a href="course-grid-version2-3col.html">3 Columns</a></li>
                              <li><a href="course-version2-right-sidebar.html">Sidebar Right</a></li>
                              <li><a href="course-version2-left-sidebar.html">Sidebar Left</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses List View</a>
                            <ul  class="dropdown-menu">
                              <li><a href="course-right-sidebar.html">Sidebar Right</a></li>
                              <li><a href="course-left-sidebar.html">Sidebar Left</a></li>
                              <li><a href="course-fullwidth.html">Fullwidth</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Single Course</a>
                            <ul class="dropdown-menu">
                              <li><a href="single-course-right-sidebar.html">Sidebar Right</a></li>
                              <li><a href="single-course-left-sidebar.html">Sidebar Left</a></li>
                              <li><a href="single-course-fullwidth.html">Fullwidth</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy Course</a>
                            <ul class="dropdown-menu">
                              <li><a href="cart.html">Cart</a></li>
                              <li><a href="checkout.html">Checkout</a></li>
                              <li><a href="confirmation.html">Confirmation </a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lokasi Cab. Rental</a>
                        <ul class="dropdown-menu">
                          <li><a href="about.html">About College</a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Photo Gallery</a>
                            <ul class="dropdown-menu">
                              <li><a href="photo-gallery3col.html">Gallery 3 Columns</a></li>
                              <li><a href="photo-gallery4col.html">Gallery 4 Columns</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apply Now</a>
                            <ul class="dropdown-menu">
                              <li><a href="buying-steps.html">Apply For Addmission</a></li>
                              <li><a href="buying-confirmation.html">Confirmation</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prices Table</a>
                            <ul class="dropdown-menu">
                              <li><a href="price-table-3col.html">Prices 3 column</a></li>
                              <li><a href="price-table-4col.html">Prices 4 column</a></li>
                            </ul>
                          </li>
                          <li><a href="campus.html">Our Campus</a></li>
                          <li><a href="stuff.html">Stuff</a></li>
                          <li><a href="international_students.html">International Students</a></li>
                          <li><a href="contact-us.html">Contact Us</a></li>
                          <li><a href="privacy-policy.html">Privacy Policy</a></li>
                          <li><a href="404-error.html">404 Not Found</a></li>
                          <li><a href="coming-soon-dark.html" target="_blank">Coming Soon</a></li>
                        </ul>
                      </li>
                      <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us</a>
                        <ul class="dropdown-menu">
                          <li><a href="blog-right-sidebar.html">Blog Sidebar Right</a></li>
                          <li><a href="blog-left-sidebar.html">Blog Sidebar Left</a></li>
                          <li><a href="single-post-right-sidebar.html">Single Post Sidebar Right</a></li>
                          <li><a href="single-post-left-sidebar.html">Single Post Sidebar Left</a></li>
                        </ul>
                      </li>
                      <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">=</a>
                        <ul class="dropdown-menu">
                          <li><a href="events-3col.html">Events 3 Columns</a></li>
                          <li><a href="events-right-sidebar.html">Events Sidebar Right</a></li>
                          <li><a href="events-left-sidebar.html">Events Sidebar Left</a></li>
                          <li><a href="single-events.html">Single Event</a></li>
                          <li><a href="events-calendar.html">Events Callender</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div> 

                  <div class="cart-dropdown">
                    <a href="cart.html" class="shop-cart">
                      <i class="fa fa-shopping-cart"></i>
                      <span class="badge">3</span>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div><!-- /.container -->
        </nav><!-- navbar -->
      </div>
    </header>


    <!-- BANNER -->
    <div class="bannercontainer bannerV2">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="img/home/slider/slidecar1.jpeg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft text-center"
                  data-x="center"
                  data-y="210"
                  data-speed="800"
                  data-start="500"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Butuh mobil dadakan?
                </div>

                <div class="tp-caption rs-caption-2 sft text-center"
                  data-x="center"
                  data-y="320"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  -
                </div>
                <div class="tp-caption rs-caption-3 sft text-center"
                  data-x="center"
                  data-y="400"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <a href="https://api.whatsapp.com/send?phone=6289501969614" class="btn primary-btn">Register</a>
                </div>
              </div>
            </li>
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="img/home/slider/slidecar2.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft"
                  data-hoffset="0"
                  data-y="210"
                  data-speed="800"
                  data-start="500"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Lebih dari ratusan mobil tersedia
                </div>

                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="320"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat.
                </div>
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="400"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <a href="https://api.whatsapp.com/send?phone=6289501969614" class="btn primary-btn">Call Now</a>
                </div>
              </div>
            </li>
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
              <img src="img/home/slider/slidecar3.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft text-right"
                  data-hoffset="-50"
                  data-x="right"
                  data-y="210"
                  data-speed="800"
                  data-start="500"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Terbukti dan Terpecaya
                </div>

                <div class="tp-caption rs-caption-2 sft text-right"
                  data-hoffset="-50"
                  data-x="right"
                  data-y="320"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  -
                </div>
                <div class="tp-caption rs-caption-3 sft text-right"
                  data-hoffset="-50"
                  data-x="right"
                  data-y="400"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <a href="https://api.whatsapp.com/send?phone=6289501969614" class="btn primary-btn">Register</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- BANNER BOTTOM -->
    <div class="banner-bottom">
      <div class="container">
        <div class="banner-bottom-inner">
          <div class="row">
            <div class="col-sm-4">
              <div class="selectBox select-category clearfix">
                <select name="guiest_id4" id="guiest_id4">
                  <option value="0"><i class="fa fa-align-justify" aria-hidden="true"></i>Jenis Mobil</option>
                  <option value="1">Honda</option>
                  <option value="2">Mitsubishi</option>
                  <option value="3">Mazda</option>
                  <option value="3">Suzuki</option>
                  <option value="3">Toyota</option>
                  <option value="3">Mercedes Benz</option>
                  <option value="3">Isuzu</option>
                  <option value="3">Nissan</option>
                  <option value="3">Tesla</option>
                </select>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="searchCourse">
                <form action="courses.html" method="post">
                  <input type="text" placeholder="Cari mobil idaman anda..." id="exampleInputEmail1" class="form-control">
                  <button class="btn btn-default commonBtn" type="submit">Search</button>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
      <div class="container">
        <div class="info-section">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-car" aria-hidden="true"></i>
                <div class="separator"></div>
                <span>Lebih dari 500 mobil yang disewakan</span>
              </div>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-money" aria-hidden="true"></i>
                <div class="separator"></div>
                <span>Biaya Murah dan Bersaing</span>
              </div>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <div class="separator"></div>
                <span>Perawatan Berkala Setiap Bulan</span>
              </div>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-group" aria-hidden="true"></i>
                <div class="separator"></div>
                <span>Lebih dari 1000 Pelanggan Setia</span>
              </div>
            </div>
          </div>
        </div>

        <!--POPULAR COURSE -->
        <div class="popularCourse padding clearfix">
          <div class="sectionTitle text-center">
            <h3>Popular Cars</h3>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="imageBox">
                <div class="productImage clearfix">
                  <a href="single-course-right-sidebar.html"><img src="img/home/course/car1.jpg" alt="Image" class="img-rounded" width="460" height="190"></a>
                  <span class="sticker"><i class="fa fa-clock-o" aria-hidden="true"></i>24 Jam</span>
                </div>
                <div class="productCaption clearfix">
                  <h3><a href="single-course-right-sidebar.html">Toyota Alphard</a></h3>
                  <div class="product-meta">
                    <span class="author">By: A Rent</span>
                  </div>
                  <div class="rating">
                    <span class="rating-star">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span class="rating-review">(150 Reviews)</span>
                  </div>
                  <div class="caption-bottom">
                    <div class="price">
                      <span class="offer-price">Rp 700.000</span>
                    </div>
                    <div class="user">
                      <i class="fa fa-user-o" aria-hidden="true"></i>
                      <span class="course-user">150 Stok<br> <b>Ready</b></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="imageBox">
                <div class="productImage clearfix">
                  <a href="single-course-right-sidebar.html"><img src="img/home/course/car2.jpg" alt="Image" class="img-rounded" width="460" height="190"></a>
                  <span class="sticker"><i class="fa fa-clock-o" aria-hidden="true"></i>24 Jam</span>
                </div>
                <div class="productCaption clearfix">
                  <h3><a href="single-course-right-sidebar.html">Mitsubishi Pajero Sport</a></h3>
                  <div class="product-meta">
                    <span class="author">By: A Rent</span>
                  </div>
                  <div class="rating">
                    <span class="rating-star">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span>
                    <span class="rating-review">(170 Reviews)</span>
                  </div>
                  <div class="caption-bottom">
                    <div class="price">
                      <span class="offer-price">Rp 600.000</span>
                    </div>
                    <div class="user">
                      <i class="fa fa-user-o" aria-hidden="true"></i>
                      <span class="course-user">129 Stok<br><b>Ready</b></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="imageBox">
                <div class="productImage clearfix">
                  <a href="single-course-right-sidebar.html"><img src="img/home/course/car3.jpg" alt="Image" class="img-rounded" width="460" height="190" ></a>
                  <span class="sticker"><i class="fa fa-clock-o" aria-hidden="true"></i>24 Jam</span>
                </div>
                <div class="productCaption clearfix">
                  <h3><a href="single-course-right-sidebar.html">Isuzu MUX</a></h3>
                  <div class="product-meta">
                    <span class="author">By: B Rent</span>
                  </div>
                  <div class="rating">
                    <span class="rating-star">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span class="rating-review">(120 Reviews)</span>
                  </div>
                  <div class="caption-bottom">
                    <div class="price">
                      <span class="offer-price">Rp 500.000</span>
                    </div>
                    <div class="user">
                      <i class="fa fa-user-o" aria-hidden="true"></i>
                      <span class="course-user">150 Stok <br><b>Ready</b></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="imageBox">
                <div class="productImage clearfix">
                  <a href="single-course-right-sidebar.html"><img src="img/home/course/car4.jpg" alt="Image" class="img-rounded" width="460" height="190"></a>
                  <span class="sticker"><i class="fa fa-clock-o" aria-hidden="true"></i>24 Jam</span>
                </div>
                <div class="productCaption clearfix">
                  <h3><a href="single-course-right-sidebar.html">Honda BR-V</a></h3>
                  <div class="product-meta">
                    <span class="author">By: B Rent</span>
                  </div>
                  <div class="rating">
                    <span class="rating-star">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span>
                    <span class="rating-review">(100 Reviews)</span>
                  </div>
                  <div class="caption-bottom">
                    <div class="price">
                      <span class="offer-price">Rp 500.000</span>
                    </div>
                    <div class="user">
                      <i class="fa fa-user-o" aria-hidden="true"></i>
                      <span class="course-user">130 Stok<br><b>Ready</b></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="btnArea text-center">
            <a href="" class="btn btn-default commonBtn">View more</a>
          </div>
        </div>

      </div>
    </div>

    <!-- COURSE CATEGORY -->
    <section class="courseCategory padding paralax" style="background-image: url(img/home/paralax/car-background-image.jpg);">
      <div class="container">
        <div class="sectionTitle text-center">
          <h3>Car Brands</h3>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="car-honda" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="">Honda</a></h4>
                <a class="courseNo" href=""></a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="car-mitsubishi" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="">Mitsubishi</a></h4>
                <a class="courseNo" href=""></a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="car-mazda" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="">Mazda</a></h4>
                <a class="courseNo" href="">106 Stok</a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="car-suzuki" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="">Suzuki</a></h4>
                <a class="courseNo" href=""></a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="car-toyota" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="">Toyota</a></h4>
                <a class="courseNo" href=""></a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="car-isuzu" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="">Isuzu</a></h4>
                <a class="courseNo" href=""></a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="car-nissan" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="">Nissan</a></h4>
                <a class="courseNo" href=""></a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="car-tesla" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="">Telsa</a></h4>
                <a class="courseNo" href=""></a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-6">
            <div class="text-box">
              <div class="text-box-icon">
                <i class="car-mercedes-benz" aria-hidden="true"></i>
              </div>
              <div class="text-box-top">
                <h4><a href="">Mercedes Benz</a></h4>
                <a class="courseNo" href="">84 Stok</a>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
              </div>
            </div>
          </div>
        </div>

        <div class="btnArea text-center">
          <a href="" class="btn btn-default commonBtn">Hubungi Langsung</a>
        </div>
      </div>
    </section>

     <!-- LIGHT SECTION -->
    <section class="clearfix padding feature-section">
      <div class="container">

        <div class="sectionTitle text-center">
          <h3>Why Royal Course?</h3>
        </div>

        <div class="row">
          <div class="col-sm-3 col-xs-6 text-center">
            <div class="feature-box">
              <span><i class="fa fa-firefox" aria-hidden="true"></i></span>
              <h3>Learn Anything Online</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6 text-center">
            <div class="feature-box">
              <span><i class="fa fa-desktop" aria-hidden="true"></i></span>
              <h3>Learn On Any Device</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6 text-center">
            <div class="feature-box">
              <span><i class="fa fa-id-badge" aria-hidden="true"></i></span>
              <h3>Cartification Courses</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6 text-center">
            <div class="feature-box">
              <span><i class="fa fa-headphones" aria-hidden="true"></i></span>
              <h3>24/7 Support</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
          </div>
        </div>

        <div class="btnArea text-center">
          <a href="" class="btn btn-default commonBtn">All Categories</a>
          <a href="" class="btn btn-default commonBtn secondaryBtn">View more</a>
        </div>

      </div>
    </section>

    <!-- SUCCESS SECTION -->
    <section class="clearfix padding success-section">
      <div class="container">
        <div class="sectionTitle text-center">
          <h3>Testimoni</h3>
        </div>

        <div class="owl-carousel success-inner">
          <div class="slide">
            <div class="row">
              <div class="col-sm-6 col-xs-12 text-center">
                <div class="success_video">
                  <img src="https://image.freepik.com/free-icon/male-user-shadow_318-34042.jpg" data-video="https://www.youtube.com/embed/oOMcZoeEK0A?autoplay=1">
                </div>
              </div>
              <div class="col-sm-6 col-xs-12 text-center">
                <div class="slide-info">
                  <div class="carousal_content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
                  </div>
                  <div class="carousal_bottom">
                    <div class="thumb">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuHjMNUJdENz3G1iyLDgmhSmTWj6pdqdUvWXGBr9MVpLKs8Kn7" alt="Image" draggable="false">
                    </div>
                    <div class="thumb_title">
                      <span class="author_name">Bambang</span>
                    <!--  <span class="author_designation">PHD Student<a href="#"> Apple Inc</a></span> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="row">
              <div class="col-sm-6 col-xs-12 text-center">
                <div class="success_video">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuHjMNUJdENz3G1iyLDgmhSmTWj6pdqdUvWXGBr9MVpLKs8Kn7" data-video="https://www.youtube.com/embed/oOMcZoeEK0A?autoplay=1">
                </div>
              </div>
              <div class="col-sm-6 col-xs-12 text-center">
                <div class="slide-info">
                  <div class="carousal_content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
                  </div>
                  <div class="carousal_bottom">
                    <div class="thumb">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuHjMNUJdENz3G1iyLDgmhSmTWj6pdqdUvWXGBr9MVpLKs8Kn7" alt="Image" draggable="false">
                    </div>
                    <div class="thumb_title">
                      <span class="author_name">Waluyo</span>
                    <!--  <span class="author_designation">PHD Student<a href="#"> Apple Inc</a></span> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="row">
              <div class="col-sm-6 col-xs-12 text-center">
                <div class="success_video">
                  <img src="http://www.ukm.my/psukm/wp-content/uploads/wp/person_4_icon-icons.com_68900.png" data-video="https://www.youtube.com/embed/oOMcZoeEK0A?autoplay=1">
                </div>
              </div>
              <div class="col-sm-6 col-xs-12 text-center">
                <div class="slide-info">
                  <div class="carousal_content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
                  </div>
                  <div class="carousal_bottom">
                    <div class="thumb">
                      <img src="http://www.ukm.my/psukm/wp-content/uploads/wp/person_4_icon-icons.com_68900.png" alt="Image" draggable="false">
                    </div>
                    <div class="thumb_title">
                      <span class="author_name">Fairus</span>
                    <!--  <span class="author_designation">PHD Student<a href="#"> Apple Inc</a></span> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <footer class="footer-v2">
  <div class="menuFooter clearfix">
    <div class="container">
      <div class="row clearfix">

        <div class="col-sm-3 col-xs-6">
          <div class="footer-about">
            <a class="footer-logo" href="index.html">
              <img src="img/home/carlogo.jpg" alt="logo" class="img-responsive" />
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
            <a href="">Read More ></a>
          </div>
        </div><!-- col-sm-3 col-xs-6 -->

        <div class="col-sm-3 col-xs-6">
          <h5>Footer Satu</h5>
          <ul class="menuLink">
            <li><a href="about.html">Footer 1</a></li>
            <li><a href="campus.html">Footer 2</a></li>
            <li><a href="stuff.html">Footer 3</a></li>
            <li><a href="about.html">Footer 4</a></li>
          </ul>
        </div><!-- col-sm-3 col-xs-6 -->

        <div class="col-sm-3 col-xs-6">
          <h5>Footer 2</h5>
          <ul class="menuLink">
            <li><a href="course-fullwidth.html">Footer 5</a></li>
            <li><a href="buying-steps.html">Footer 6</a></li>
            <li><a href="photo-gallery3col.html">Footer 7</a></li>
            <li><a href="international_students.html">Footer 8</a></li>
          </ul>
        </div><!-- col-sm-3 col-xs-6 -->

        <div class="col-sm-3 col-xs-6">
          <h5>Contact Us</h5>
          <p>Menerima panggilan selama 24 Jam. </p>
          <div class="footer-contact">
            <ul>
            <li> <i class="fa fa-home" aria-hidden="true"></i>54640 Lemah Gempal, Bulustalan, Semarang Selatan.</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i>089 501 969 614</li>
            <li><a href="mailto:cs@sewamobil.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@gorentcar.com</a></li>
            </ul>
          </div>
        </div><!-- col-sm-3 col-xs-6 -->

      </div><!-- row clearfix -->
    </div><!-- container -->
  </div><!-- menuFooter -->

  <div class="footer clearfix">
    <div class="container">
      <div class="footer-bottom">
        <div class="row clearfix">
          <div class="col-sm-6 col-xs-12 copyRight">
            <p>© 2018 Copyright Royal College Bootstrap Template by <a href="http://www.iamabdus.com">Abdus</a></p>
          </div><!-- col-sm-6 col-xs-12 -->
          <div class="col-sm-6 col-xs-12 privacy_policy">
            <a href="contact-us.html">Site Map </a>
            <a href="privacy-policy.html">Privacy Policy</a>
            <a href="privacy-policy.html">Trademarks and Copyright</a>
          </div><!-- col-sm-6 col-xs-12 -->
        </div><!-- row clearfix -->
      </div>
    </div><!-- container -->
  </div><!-- footer -->
</footer>

</div>

<!-- REGISTER MODAL -->
<div class="modal fade customModal" id="createAccount" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="panel panel-default formPanel">
      <div class="panel-heading">
        <h3 class="panel-title">Please Sign up to checkout</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="panel-body">
        <form action="<?php echo base_url('user/register_user'); ?>" name="form1" method="POST" role="form">
          <div class="form-group formField">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="user_name" class="form-control" placeholder="Full Name">
          </div>
          <div class="form-group formField">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="text" name="user_email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group formField">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="user_password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group formField">
            <i class="fa fa-number" aria-hidden="true"></i>
            <input type="number" name="user_age" class="form-control" placeholder="Age">
          </div>
          <div class="form-group formField">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <input type="number" name="user_mobile" class="form-control" placeholder="Mobile No">
          </div>
          <button type="submit" name="submit" class="btn btn-block commonBtn">Daftar</button>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox">Check here for exiting deals and personalized Course recommendations
              </label>
            </div>
          </div>
        </form>
        <div class="alt-text">or</div>
        <div class="modal-border"></div>
        <div class="alt-btn">
          <a class="facebook-btn btn btn-block" href="#">Log in with Facebook</a>
          <a class="twitter-btn btn btn-block" href="#">Log in with Facebook</a>
        </div>
      </div>
      <div class="panel-footer">
        <p>Allready have an account? <a href="#">Log in</a></p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- LOGIN MODAL -->
<div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="panel panel-default formPanel">
      <div class="panel-heading">
        <h3 class="panel-title">Log In to your Account</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="panel-body">
        <form action="#" method="POST" role="form">
          <div class="form-group formField">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="form-group formField">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-block commonBtn">Log in</button>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox">Remember me
              </label>
            </div>
            <a class="forgot-link" href="#">Fogot Password?</a>
          </div>
        </form>
        <div class="alt-text">or</div>
        <div class="modal-border"></div>
        <div class="alt-btn">
          <a class="facebook-btn btn btn-block" href="#">Log in with Facebook</a>
          <a class="twitter-btn btn btn-block" href="#">Log in with Facebook</a>
        </div>
      </div>
      <div class="panel-footer">
        <p>Don’t have an Account? <a href="#">Sign up</a></p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- JQUERY SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/pop-up/jquery.magnific-popup.js"></script>
<script src="plugins/animation/waypoints.min.js"></script>
<script src="plugins/count-up/jquery.counterup.js"></script>
<script src="plugins/animation/wow.min.js"></script>
<script src="plugins/animation/moment.min.js"></script>
<script src="plugins/calender/fullcalendar.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<script src="plugins/timer/jquery.syotimer.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.js"></script>
<script src="js/custom.js"></script>
<script>
$(window).load(function(){
$('.version2 ').each(function(){
  var header_area = $('.header-v2');
  var main_area = header_area.children('.header');

  var logo = main_area.find('.navbar-header');
  var navigation = main_area.find('.navbar-collapse');
  var original = {
    nav_top: navigation.css('margin-top')
  };

  $(window).scroll(function(){
    if( main_area.hasClass('bb-fixed-header') && ($(this).scrollTop() === 0 )){
      main_area.removeClass('bb-fixed-header').appendTo(header_area);
      navigation.animate({'margin-top': original.nav_top}, {duration: 300, queue: false, complete: function(){
        header_area.css('height', 'auto');
      }});
    }else if( !main_area.hasClass('bb-fixed-header') && $(this).width() > 250 &&
      $(this).scrollTop() > header_area.offset().top + header_area.height() - parseInt($('html').css('margin-top'),10) ){
      header_area.css('height', header_area.height());
      main_area.css({'opacity': '0'}).addClass('bb-fixed-header');
      main_area.appendTo($('body')).animate({'opacity': 1});

      navigation.css({'margin-top': '0px'});
    }
  });
});

$(window).trigger('resize');
$(window).trigger('scroll');
});
</script>
</body>
</html>

