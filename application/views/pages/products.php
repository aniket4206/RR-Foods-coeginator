<!DOCTYPE html>
<html>

<head>
  <title>Products | RR Foods</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png') ?>" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css') ?>" />
  <style>
    .product-style-1 .desc {
      background-color: #c1f0ae;
    }
  </style>
</head>

<body class="">
  <div class="shop-detail-3 woocommerce" id="page">
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
    <section class="sub-header shop-detail-1">
      <img class="rellax bg-overlay" src="<?= base_url('assets/images/s_3.jpg') ?>" alt="">
      <div class="overlay-call-to-action"></div>
      <h3 class="heading-style-3 font-bold">OUR PRODUCTS</h3>
    </section>
    <section class="boxed-sm">
      <div class="container">
        <br><br>
        <div class="woocommerce-tabs">
          <div class="row">
            <div class="col-md-12 woocommerce-tabs-inner">
              <div class="row">
                <div class="col-md-8 col-12 col-md-offset-2" id="myBtnContainer">
                  <ul class="tabs tab-style-2" data-responsive-accordion-tabs="tabs medium-accordion large-tabs" role="tablist">
       <!--              <li class="active" style="padding:10px">
                      <a href="#" data-toggle="tab" onclick="filterSelection('all')">All</a>
                    </li> -->
                    <li class="active" role="presentation" style="padding:10px">
                      <a aria-controls="Description" onclick="filterSelection('DehydratedPro')" role="tab" data-toggle="tab">Dehydrated
                      Products</a>
                    </li>
                    <li role="presentation" style="padding:10px">
                      <a aria-controls="Description" onclick="filterSelection('SprayDriedPro')" role="tab" data-toggle="tab">Spray
                      Dried Products</a>
                    </li>
                    <li role="presentation" style="padding:10px">
                      <a aria-controls="Description" onclick="filterSelection('Spices')" role="tab" data-toggle="tab">Spices</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-10 col-md-offset-1">
              <div class="tab-content tab-content-style-2">
                <div class="tab-pane fade in filterDiv DehydratedPro" role="tabpanel">
                  <div class="row main" >
                    <div class="row product-grid-equal-height-wrapper product-equal-height-3-columns flex multi-row" >
                      <?php for ($i = 0; $i < count($dehydrate); $i++) : ?>
                        <?php if ($dehydrate[$i]->active == 'Publish') : ?>
                          <figure class="item" >
                            <div class="product product-style-1">
                              <div class="img-wrapper">
                                <a href="<?= base_url('product_view?id=' . $dehydrate[$i]->id)  ?>"><img class="img-responsive same_img" src="<?= base_url('assets/images/Product-Images/') . $dehydrate[$i]->image ?>" alt="product thumbnail" /></a>
                                <div class="product-control-wrapper bottom-right">
                                </div>
                              </div>
                              <figcaption class="desc text-center">
                                <h3 class="font-bold">
                                  <a href="<?= base_url('product_view?id=' . $dehydrate[$i]->id)  ?>">
                                    <?= $dehydrate[$i]->title ?>
                                  </a>
                                </h3><br>
                                <a class="read-more" style="color: #333;" href="<?= base_url('product_view?id=' . $dehydrate[$i]->id)  ?>"><u>View More</u>
                                </a>
                                <!-- <span class="price"><?= $dehydrate[$i]->description ?></span> -->
                              </figcaption>
                            </div>
                          </figure>
                        <?php endif; ?>
                      <?php endfor; ?>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade in filterDiv SprayDriedPro" role="tabpanel">
                  <div class="row main">
                    <div class="row product-grid-equal-height-wrapper product-equal-height-3-columns flex multi-row">
                      <?php for ($i = 0; $i < count($SprayDriedPro); $i++) : ?>
                        <?php if ($SprayDriedPro[$i]->active == 'Publish') : ?>
                          <figure class="item">
                            <div class="product product-style-1">
                              <div class="img-wrapper">
                                <a href="<?= base_url('product_view?id=' . $SprayDriedPro[$i]->id)  ?>"><img class="img-responsive same_img" src="<?= base_url('assets/images/Product-Images/') . $SprayDriedPro[$i]->image ?>" alt="product thumbnail" /></a>
                                <div class="product-control-wrapper bottom-right">
                                </div>
                              </div>
                              <figcaption class="desc text-center">
                                <h3 class="font-bold">
                                  <a href="<?= base_url('product_view?id=' . $SprayDriedPro[$i]->id)  ?>">
                                    <?= $SprayDriedPro[$i]->title ?>
                                  </a>
                                </h3><br>
                                <a class="read-more" style="color: #333;" href="<?= base_url('product_view?id=' . $SprayDriedPro[$i]->id)  ?>"><u>View More</u>
                                </a>
                                <!-- <span class="price"><?= $SprayDriedPro[$i]->description ?></span> -->
                              </figcaption>
                            </div>
                          </figure>
                        <?php endif; ?>
                      <?php endfor; ?>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade in filterDiv Spices" role="tabpanel">
                  <div class="row main">
                    <div class="row product-grid-equal-height-wrapper product-equal-height-3-columns flex multi-row">
                      <?php for ($i = 0; $i < count($Spices); $i++) : ?>
                        <?php if ($Spices[$i]->active == 'Publish') : ?>
                          <figure class="item">
                            <div class="product product-style-1">
                              <div class="img-wrapper">
                                <a href="<?= base_url('product_view?id=' . $Spices[$i]->id)  ?>"><img class="img-responsive same_img" src="<?= base_url('assets/images/Product-Images/') . $Spices[$i]->image ?>" alt="product thumbnail" /></a>
                                <div class="product-control-wrapper bottom-right">
                                </div>
                              </div>
                              <figcaption class="desc text-center">
                                <h3 class="font-bold">
                                  <a href="<?= base_url('product_view?id=' . $Spices[$i]->id)  ?>">
                                    <?= $Spices[$i]->title ?>
                                  </a>
                                </h3><br>
                                <a class="read-more" style="color: #333;" href="<?= base_url('product_view?id=' . $Spices[$i]->id)  ?>"><u>View More</u>
                                </a>
                                <!-- <span class="price"><?= $Spices[$i]->description ?></span> -->
                              </figcaption>
                            </div>
                          </figure>
                        <?php endif; ?>
                      <?php endfor; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <br><br>
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
  <script>
    filterSelection("all")

    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("filterDiv");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
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
  <script src="<?= base_url('assets/js/config-carousel.js') ?>">


  </script>
  <script src="<?= base_url('assets/js/config-carousel-thumbnail.js') ?>">


  </script>
  <script src="<?= base_url('assets/js/config-carousel-product-quickview.js') ?>"></script>
  <!-- Demo Only-->
  <script src="<?= base_url('assets/js/demo-add-to-cart.js') ?>">


  </script>
</body>

</html>