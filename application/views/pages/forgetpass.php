<!DOCTYPE html>
<html>

<head>
  <title>RR Foods &mdash; Forget Password</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png') ?>" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css') ?>" />
</head>

<body class="animsition">
  <div class="login" id="page">
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
    <header class="header-style-3">
      <div class="container">
        <div class="row">
          <div class="header-1-inner">
            <a class="brand-logo animsition-link" href="index.html">
              <img class="img-responsive" src="<?= base_url('/assets/images/logo.png') ?>" alt="" />
            </a>
            <nav>
              <ul class="menu hidden-xs text-center">
                <li>
                  <a class="active" href="<?= base_url('home') ?>">Home</a>
                </li>
                <li>
                  <a href="<?= base_url('about') ?>">About Us</a>
                </li>
                <li>
                  <a href="<?= base_url('products') ?>">Products</a>
                  <!-- <ul class="text-left">
                    <li>
                      <a href="#">Dehydrated Products</a>
                    </li>
                    <li>
                      <a href="#">Spray Dried Products</a>
                    </li>
                    <li>
                      <a href="#">Spices</a>
                    </li>
                  </ul> -->
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
              <div class="widget widget-control-header widget-search-header">
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
              </div>
              <div class="widget widget-control-header hidden-lg hidden-md hidden-sm">
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
      <img class="rellax bg-overlay" src="<?= base_url('assets/images/CarrotFlake.jpg') ?>" alt="">
      <div class="overlay-call-to-action"></div>
      <h3 class="heading-style-3">Recover Credentials</h3>
    </section>
    <section class="boxed-sm">
      <div class="container">
        <div class="login-wrapper">
          <div class="row">
            <h3>Forgot Password</h3>
            <form>
              <div class="form-group organic-form-2">
                <label>Username *</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group remember-me">
                <a class="pull-left" href="<?= base_url('login') ?>">Login Again !</a>
                <a class="pull-right" href="#">Need help?</a>
              </div>
              <div class="form-group footer-form">
                <button class="btn btn-brand pill" type="submit">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="footer-style-2">
    <div class="copy-right style-1">
      <div class="container">
        <div class="row">
          <div class="copy-right-inner">
            <p>Copyright © 2020 Designed by <a href="https://www.ddsio.com" target="_blank">DDSIO</a>. All rights
              reserved.</p>
            <div class="widget widget-footer widget-footer-creadit-card">
              <ul class="list-unstyle">
                <li>
                  <a href="<?= base_url('contact') ?>">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="assets/js/library/jquery.min.js"></script>
  <script src="assets/js/library/bootstrap.min.js"></script>
  <script src="assets/js/function-check-viewport.js"></script>
  <script src="assets/js/library/slick.min.js"></script>
  <script src="assets/js/library/select2.full.min.js"></script>
  <script src="assets/js/library/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/library/jquery.mmenu.all.min.js"></script>
  <script src="assets/js/library/rellax.min.js"></script>
  <script src="assets/js/library/isotope.pkgd.min.js"></script>
  <script src="assets/js/library/bootstrap-notify.min.js"></script>
  <script src="assets/js/library/bootstrap-slider.js"></script>
  <script src="assets/js/library/in-view.min.js"></script>
  <script src="assets/js/library/countUp.js"></script>
  <script src="assets/js/library/animsition.min.js"></script>
  <script src="assets/js/global.js"></script>
  <script src="assets/js/config-mm-menu.js"></script>
  <script src="assets/js/config-set-bg-blog-thumb.js"></script>
  <script src="assets/js/config-accrodion.js">


  </script>
</body>

</html>