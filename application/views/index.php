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
    <?php $this->load->view("admin/_partials/header.php")?>


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
            <a href="<?php echo base_url('daftarmobil')?>" class="btn btn-default commonBtn">View more</a>
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

    <!-- FOOTER -->
    <?php $this->load->view("admin/_partials/footer1.php") ?>

</div>
<!-- js -->
<?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>

