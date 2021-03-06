<!DOCTYPE html>
<html>

<head>
  <title>RR Foods &mdash; Login</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png') ?>" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
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
            <a class="brand-logo animsition-link" href="<?= base_url('home') ?>">
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
              <div class="widget widget-control-header widget-search-header" style="padding:7px 0px;">
                <span id="google_translate_element"></span>
              </div>
              <div class="Tohide widget widget-control-header widget-search-header" style="padding:10px 0px;">
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
      <img class="rellax bg-overlay" src="<?= base_url('assets/images/MintLeaves.jpg') ?>" alt="">
      <div class="overlay-call-to-action"></div>
      <h3 class="heading-style-3">Access Dashboard</h3>
    </section>
    <section class="boxed-sm">
      <div class="container">
        <div class="login-wrapper">
          <div class="row">
            <h3>Log In</h3>
            <form action="<?php echo base_url() . 'login' ?>" method="post">
              <?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-danger">
                  <?php echo $this->session->flashdata('message') ?>
                </div>
              <?php } ?>
              <?php echo form_open('login', array('id' => 'loginForm')) ?>
              <div class="form-group organic-form-2">
                <label>Email *</label>
                <input class="form-control" type="text" id="email" name="email" required>
                <?php echo form_error('email', '<div class="error">', '</div>') ?>
              </div>
              <div class="form-group organic-form-2">
                <label>Password *</label>
                <input class="form-control" type="password" id="password" name="password" required>
                <?php echo form_error('password', '<div class="error">', '</div>') ?>
              </div>
              <div class="form-group remember-me">
                <div class="checkbox pull-left">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
              </div>
              <div class="form-group footer-form">
                <button class="btn btn-brand pill" type="submit" name="submit" value="Login">LOGIN</button>
              </div>
              <?php echo form_close(); ?>
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
            <p>Copyright ?? 2020 Designed by <a href="https://www.ddsio.com" target="_blank">DDSIO</a>. All rights
              reserved.</p>
            <div class="widget widget-footer widget-footer-creadit-card">
              <ul class="list-unstyle">
                <li>
                  <a href="<?= base_url('products') ?>">Products</a>
                </li>
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
  <script src="<?= base_url('assets/js/config-accrodion.js') ?>">


  </script>
</body>

</html>