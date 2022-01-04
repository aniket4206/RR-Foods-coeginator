<!DOCTYPE html>
<html>

<head>
  <title>About Us | RR Foods</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png') ?>" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css') ?>" />
  <!-- Link for Google Translator -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- // Link for Google Translator -->
  <style type="text/css">
    .brands {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      grid-gap: 1rem;
    }

    .brands__item {
      /*background: #eee;*/
      margin-bottom: 40px;
      text-align: center;

    }

    .brands__item img {
      margin: 35px;
      width: 140px;
      height: 140px;
      object-fit: contain;
      mix-blend-mode: multiply;
    }
  </style>
</head>

<body class="animsition">
  <div class="about" id="page">
    <nav id="menu">
      <ul>
        <li>
          <a class="active" href="<?= base_url('home') ?>">Home</a>
        </li>
        <li>
          <a href="<?= base_url('about') ?>">About Us</a>
        </li>
        <li>
          <a href="<?= base_url('products') ?>">Products</a>
        </li>
        <li>
          <a href="<?= base_url('pro_pack') ?>">Processing & Packaging</a>
        </li>
        <li>
          <a href="<?= base_url('contact') ?>">Contact Us</a>
        </li>
      </ul>
    </nav>
        <!-- tobbar -->
    <div class="top-bar topbar-center-logo" id="topbar-center-logo">
      <div class="top-bar-left">
        <ul class="menu vertical medium-horizontal">
          <li><a href="tel:+91 9766858281" style="color: #fefefe; font-size: 18.3px;"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
          <li><a href="mailto:enquiry@rrfnsk.com?subject=For Enquiry" style="color: #fefefe; font-size: 19px;"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
          <li><a href="https://goo.gl/maps/jFM3qJvd5QFKZ3DZ6" target="_blank" style="color: #fefefe; font-size: 19px;"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
          <li style="float: right;"><a id="google_translate_element"></a></li>
        </ul>
      </div>
    </div>
    <!-- /tobbar -->
    <header class="header-style-3">
      <div class="container">
        <div class="row">
          <div class="header-1-inner">
            <a class="brand-logo animsition-link" href="index.html">
              <img class="img-responsive" src="<?= base_url('/assets/images/logo.png') ?>" alt="" />
            </a>
            <nav>
              <ul class="menu hidden-xs" style="text-align: right;">
                <li>
                  <a class="active" href="<?= base_url('home') ?>">Home</a>
                </li>
                <li>
                  <a href="<?= base_url('about') ?>">About Us</a>
                </li>
                <li>
                  <a href="<?= base_url('products') ?>">Products</a>
                </li>
                <li>
                  <a href="<?= base_url('pro_pack') ?>">Processing & Packaging</a>
                </li>
                <li>
                  <a href="<?= base_url('contact') ?>">Contact Us</a>
                </li>
              </ul>
            </nav>
            <aside class="right">
<!--               <div class="widget widget-control-header widget-search-header" style="padding:7px 0px;">
                <span id="google_translate_element"></span>
              </div> -->
            <!--<div class="Tohide widget widget-control-header widget-search-header" style="padding:10px 0px;">
                <a class="control btn-open-search-form js-open-search-form-header" href="#">
                  <span class="lnr lnr-magnifier"></span>
                </a>
                <div class="form-outer">
                  <button class="btn-close-form-search-header js-close-search-form-header">
                    <span class="lnr lnr-cross"></span>
                  </button>
                  <form>
                    <input placeholder="Search" />
                    <button class="search">
                      <span class="lnr lnr-magnifier"></span>
                    </button>
                  </form>
                </div>
              </div> -->
              <div class="widget widget-control-header hidden-lg hidden-md hidden-sm" style="padding:7px;">
                <a class="navbar-toggle js-offcanvas-has-events" type="button" href="#menu">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </header>
    <section class="sub-header shop-layout-1">
      <img class="rellax bg-overlay" src="<?= base_url('assets/images/spices-2.jpg') ?>" alt="">
      <div class="overlay-call-to-action"></div>
      <h3 class="heading-style-3 font-bold">ABOUT US</h3>
    </section>
    <section class="boxed-sm">
      <div class="container">
        <div class="heading-wrapper text-center">
          <h3 class="heading font-bold" style="margin-top: 0px !important; padding: 0px 0 25px 0 !important;">Company Profile</h3>
        </div>
        <div class="row main">
          <article class="blog-detail">
            <div class="content">
              <img class="feature-image img_center img-responsive" src="<?= base_url('assets/images/spices.jpg') ?>" alt="feature-image" style="width:70%; ">
              <p class="sapo p_center">RR Foods is an Indian-based company dealing in high quality natural food ingredients ranging from dehydrated vegetables, spices, chilies, natural food colouring to customized ingredient manufacturing and food product development. They possess experience and knowledgeable staff having expertise within this sector which adds to the reliability of their sourcing, processing, and delivery methods. RR Foods is located in the city of Nashik which is famous for its fruits and vegetable farming. The company also has state-of-the-art machinery which ensures hygienic processing and clean packaging of our end-products.</p>
              <div class="row">
              </div>
            </div>
          </article>
          <!-- <br>
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="widget-social-color">
                <ul>
                  <li>
                    <a class="facebook" data-toggle="tooltip" title="Facebook" href="http://www.facebook.com/authemes">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a class="pinterest" data-toggle="tooltip" title="Pinterest" href="http://www.pinterest.com/authemes">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li>
                    <a class="twitter" data-toggle="tooltip" title="Twitter" href="http://www.twitter.com/authemes">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a class="google-plus" data-toggle="tooltip" title="Google Plus" href="https://plus.google.com/authemes">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                  <li>
                    <a class="instagram" data-toggle="tooltip" title="Instagram" href="https://instagram.com/authemes">
                      <i class="fa fa-instagram"> </i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <section class="boxed-sm">
      <div class="container">
        <div class="heading-wrapper text-center">
          <h3 class="heading font-bold">Our Journey</h3>
        </div>
        <div class="row main">
          <article class="blog-detail">
            <div class="content">
              <p class="sapo p_center">The idea of RR Foods was sparked by the spirit of entrepreneurial insight by the Suryawanshi brothers at the onset of the Covid-19 lockdown. Both the brothers from a young age were aware of exports as they had a family business that dealt with onion, grapes and pomegranates. Paritosh who is now a food technologist was working on a critical research for dehydrated foods in the spice industry when his younger brother Piyush persuaded him to join his start-up after successfully completing his MBA from a university in Pune.</p>
              <img class="feature-image img_center" src="<?= base_url('assets/images/spices-2.jpg') ?>" alt="feature-image" style="width:70%;">
              <p class="sapo p_center">Both of them quit their high-paying jobs and started working on this business as they felt their dual synergy of food expertise and business management will be unique and reliable. Within weeks of operational setup of their processing units, they started getting inquiries and fulfilled orders taking the utmost care during the ongoing pandemic. Their business began with a purpose to trade internationally and locally by being a knowledge and quality driven player within the natural food ingredient market and its related products.</p>
              <div class="row">
              </div>
            </div>
          </article>
          <!-- <br>
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="widget-social-color">
                <ul>
                  <li>
                    <a class="facebook" data-toggle="tooltip" title="Facebook" href="http://www.facebook.com/authemes">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a class="pinterest" data-toggle="tooltip" title="Pinterest" href="http://www.pinterest.com/authemes">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li>
                    <a class="twitter" data-toggle="tooltip" title="Twitter" href="http://www.twitter.com/authemes">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a class="google-plus" data-toggle="tooltip" title="Google Plus" href="https://plus.google.com/authemes">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                  <li>
                    <a class="instagram" data-toggle="tooltip" title="Instagram" href="https://instagram.com/authemes">
                      <i class="fa fa-instagram"> </i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <section class="boxed-sm">
      <div class="container">
        <div class="row main">
          <div class="row blog-h flex multi-row">
            <div class="col-md-4">
              <div class="post" style="background-color:#a8cf45">
                <div class="desc">
                  <h4 class="text-center" style="font-size: 25px;">
                    <a>OUR VISION</a>
                    <hr class="style-one">
                  </h4>
                  <br />
                  <p>To provide internationally high-quality end-to-end edible farm to fork agricultural processed products. </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="post" style="background-color:#a8cf45">
                <div class="desc">
                  <h4 class="text-center" style="font-size: 25px;">
                    <a>OUR MISION</a>
                    <hr class="style-one">
                  </h4>
                  <br />
                  <p>To offer highest quality agriculturally based edible ingredient food products which can be delivered globally from the best farms, using state-of-the-art clean technology that focuses on freshness, hygiene and processing healthy products for end-users by creating a transparent supply chain between farmers, collaborators, and consumers. </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="post" style="background-color:#a8cf45">
                <div class="desc">
                  <h4 class="text-center" style="font-size: 25px;">
                    <a>VALUES</a>
                    <hr class="style-one">
                  </h4>
                  <br />
                  <p>1. Health & Hygiene <br />
                    2. Transparency (Letting the customer know true source and process of food)<br />
                    3. Integrity (The focus is on honest dealings as well as building trust between our shareholders and customers.)<br />
                    4. No Bottom-Line Credo (Our focus is not just to make money but instead to create win-win situations for all those who are part of our business model.)
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="boxed-sm">
      <div class="container">
        <div class="heading-wrapper text-center">
          <h3 class="heading font-bold" style="margin-top: 0px !important; padding: 0px 0 25px 0 !important;">Company Certifications</h3>
        </div>
        <div class="row main">
      <ul class="brands" style="list-style-type:none;">
        <li class="brands__item">
          <a href="#">
            <img src="<?= base_url('assets/images/fssai_logo.svg') ?>" alt="" />
          </a>
          <a href="#">
            <img src="<?= base_url('assets/images/spices-board-india.png') ?>" alt="" />
          </a>
          <a href="#">
            <img src="<?= base_url('assets/images/apeda_logo.svg') ?>" alt="" />
          </a>
        </li>
      </ul>
        </div>
      </div>
    </section>



    <!--
      <section>
        <div class="counter-wrapper">
          <img class="rellax bg-overlay" src="<?= base_url('assets/images/call-to-action/4.jpg') ?>" alt="" />
          <div class="overlay-counter"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="couter-wrapper">
                  <p class="js-countup" data-count="154">0</p>
                  <span>HAPPY CLIENT</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="couter-wrapper">
                  <p class="js-countup" data-count="234">0</p>
                  <span>PRODUCTS IN STORE</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="couter-wrapper">
                  <p class="js-countup" data-count="32">0</p>
                  <span>YEAR OF EXPERIENCE</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="couter-wrapper">
                  <p class="js-countup" data-count="126">0</p>
                  <span>RUNING PROJECTS</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        
    -->

    <!--
      <section class="boxed-sm">
        <div class="container">
          <div class="heading-wrapper text-center">
            <h3 class="heading">Our Team</h3>
          </div>
          <div class="team-wrapper">
            <div class="row">
              <div class="about-carousel">
                <div class="item">
                  <figure class="item-team">
                    <div class="img-wrapper">
                      <img class="img-responsive" src="<?= base_url('assets/images/team/01.jpg') ?>" alt="product thumbnail">
                    </div>
                    <figcaption class="desc text-center">
                      <h4 class="name">Billy Ray</h4>
                      <span class="position">Leader</span>
                    </figcaption>
                  </figure>
                </div>
                <div class="item">
                  <figure class="item-team">
                    <div class="img-wrapper">
                      <img class="img-responsive" src="<?= base_url('assets/images/team/02.jpg') ?>" alt="product thumbnail">
                    </div>
                    <figcaption class="desc text-center">
                      <h4 class="name">Danielle Reed</h4>
                      <span class="position">Farmer</span>
                    </figcaption>
                  </figure>
                </div>
                <div class="item">
                  <figure class="item-team">
                    <div class="img-wrapper">
                      <img class="img-responsive" src="<?= base_url('assets/images/team/03.jpg') ?>" alt="product thumbnail">
                    </div>
                    <figcaption class="desc text-center">
                      <h4 class="name">Peter Castro</h4>
                      <span class="position">Farmer</span>
                    </figcaption>
                  </figure>
                </div>
                <div class="item">
                  <figure class="item-team">
                    <div class="img-wrapper">
                      <img class="img-responsive" src="<?= base_url('assets/images/team/04.jpg') ?>" alt="product thumbnail">
                    </div>
                    <figcaption class="desc text-center">
                      <h4 class="name">Adam Carter</h4>
                      <span class="position">Leader</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
    -->

  </div>

  <footer class="footer-style-1">
    <div class="container">
      <div class="row">
        <div class="footer-style-1-inner">
          <div class="widget-footer widget-text col-first col-small">
            <a class="brand-logo animsition-link" href="index.html">
              <img style="height: 70px;" class="img-responsive" src="<?= base_url('/assets/images/logo.png') ?>" alt="" />
              <br>
            </a>
            <div class="">
              <p style="color: #666666; text-align: justify;">RR Foods is an Indian-based company dealing in high quality natural food ingredients ranging from dehydrated vegetables, spices, chilies, natural food colouring to customised ingredient manufacturing and food product development. </p>
            </div>
          </div>
          <div class="widget-footer widget-text col-first col-small">
            <h4 class="h4 heading">ADDRESS</h4><br>
            <div class="widget-link">
              <ul>
                <li>
                  <span class="lnr lnr-map-marker icon"></span>
                  <span>PLOT NO-5, UMBERKHED ROAD, PIMPALGAON BASWANT, TAL.NIPHAD, DIST.NASHIK 42220</span>
                </li>
                <li>
                  <span class="lnr lnr-phone-handset icon"></span>
                  <a href="tel:+919766858281">+91 9766858281</a> / <a href="tel:+917709727977">+91 7709727977</a>
                </li>
                <li>
                  <span class="lnr lnr-envelope icon"></span>
                  <a href="mailto:enquiry@rrfnsk.com">enquiry@rrfnsk.com</a> / <a href="mailto:info@rrfnsk.com">info@rrfnsk.com</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget-footer widget-link col-second col-medium">
            <div class="list-link">
              <h4 class="h4 heading">LOCATION</h4>
              <div class="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.346688127249!2d73.97543821424105!3d20.161285622201376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdddad6b6ac4749%3A0x48725c529631bc6d!2sUmberkhed%20Rd%2C%20Pimpalgaon%20Baswant%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1606656336551!5m2!1sen!2sin" frameborder="0" style="width: 200px; height: a; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
            <div class="list-link">
              <h4 class="h4 heading">QUICK LINKS</h4>
              <ul>
                <li>
                  <a href="<?= base_url('about') ?>">About Us</a>
                </li>
                <li>
                  <a href="<?= base_url('products') ?>">Products</a>
                </li>
                <li>
                  <a href="<?= base_url('contact') ?>">Contact Us</a>
                </li>
                <li>
                  <a href="<?= base_url('pro_pack') ?>">Processing & Packaging</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right style-1">
      <div class="container">
        <div class="row">
          <div class="text-center">
            <p>Copyright © 2020 Designed by <a href="https://www.ddsio.com" target="_blank">DDSIO</a>. All rights
            reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
    <script type="text/javascript">
    document.onreadystatechange = function() {
      if (document.readyState === "complete") {
        // $("#panel_left").addClass("panel_left");
        // $("#panel_right").addClass("panel_right");
        $("#loader").addClass("loaded-circle");
        $("#loader-img").addClass("loaded-img");
        $("#preloader").addClass("loaded-img");
      }
    }
  </script>
  <script src="<?= base_url('assets/js/googletrans.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/function-check-viewport.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/slick.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/select2.full.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/imagesloaded.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/jquery.mmenu.all.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/rellax.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/bootstrap-notify.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/bootstrap-slider.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/in-view.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/countUp.js') ?>"></script>
  <script src="<?= base_url('assets/js/library/animsition.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/global.js') ?>"></script>
  <script src="<?= base_url('assets/js/config-mm-menu.js') ?>"></script>
  <script src="<?= base_url('assets/js/config-set-bg-blog-thumb.js') ?>"></script>
  <script src="<?= base_url('assets/js/config-inview-counter-up.js') ?>"></script>
  <script src="<?= base_url('assets/js/config-carousel.js') ?>"></script>
</body>

</html>