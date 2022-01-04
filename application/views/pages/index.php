<!DOCTYPE html>
<html>

<head>
	<title>Home | RR Foods</title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png') ?>" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/main.css') ?>" />
	<!-- Link for Google Translator -->
	<!-- 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<!-- // Link for Google Translator -->
	<style type="text/css">
</style>
</head>

<body>
	<div class="wrapper_loader">
		<img class="logo-svg" src="assets/images/logo.png" />
		<div id="loader"></div>
	</div>
	<div class="home-3" id="page">
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
							<!-- <div class="widget widget-control-header widget-search-header" style="padding:7px 0px;">
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
<div class="u-mb60">
	<div class="banner-slider-2 rev_slider" id="slider-3">
		<ul>
			<li data-transition="fade">
				<img src="<?= base_url('assets/images/s_1.jpg') ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
				<div class="tp-caption" data-x="center" data-y="center" data-voffset="['-100','-100','-140','-140']" data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:-80px;opacity:0;s:300;" data-start="1000">
					<h2 class="mr_top">White Onion Flakes</h2>
				</div>
				<div class="tp-caption text-center" data-x="center" data-y="center" data-voffset="['120','120','200','200']" data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:200px;opacity:0;s:300;" data-start="1600">
					<a class="btn btn-brand pill" href="<?= base_url('products') ?>">View More</a>
				</div>
			</li>
			<li data-transition="fade">
				<img src="<?= base_url('assets/images/s_3.jpg') ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
				<div class="tp-caption" data-x="center" data-y="center" data-voffset="['-100','-100','-140','-140']" data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:-80px;opacity:0;s:300;" data-start="1000">
					<h2 class="mr_top">Garlic Flakes</h2>
				</div>
				<div class="tp-caption" data-x="center" data-y="center" data-voffset="['120','120','200','200']" data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:200px;opacity:0;s:300;" data-start="1600">
					<a class="btn btn-brand pill" href="<?= base_url('products') ?>">View More</a>
				</div>
			</li>
			<li data-transition="fade">
				<img src="<?= base_url('assets/images/spices-1.jpg') ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
				<div class="tp-caption" data-x="center" data-y="center" data-voffset="['-100','-100','-140','-140']" data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:-80px;opacity:0;s:300;" data-start="1000">
					<h2 class="mr_top">Spices</h2>
				</div>
				<div class="tp-caption" data-x="center" data-y="center" data-voffset="['120','120','200','200']" data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:200px;opacity:0;s:300;" data-start="1600">
					<a class="btn btn-brand pill" href="<?= base_url('products') ?>">View More</a>
				</div>
			</li>
		</ul>
	</div>
</div>
</div>

<section class="boxed-sm">
	<div class="container">
		<div class="heading-wrapper text-center">
			<h3 class="heading font-bold">Welcome to RR Foods</h3>
		</div>
		<div class="row main">
			<article class="blog-detail">
				<div class="content">
					<p class="sapo p_center">RR Foods is an Indian-based company dealing in high quality natural food ingredients ranging from dehydrated vegetables, spices, chilies, natural food colouring to customised ingredient manufacturing and food product development. They possess experience and knowledgeable staff having expertise within this sector which adds to the reliability of their sourcing, processing, and delivery methods. RR Foods is located in the city of Nashik which is famous for its fruits and vegetable farming. The company also has state-of-the-art machinery which ensures hygienic processing and clean packaging of our end-products.</p>
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
		<div class="row blog-v reverse">
			<div class="col-md-12">
				<div class="post">
					<div class="img-wrapper js-set-bg-blog-thumb">
						<img src="<?= base_url('assets/images/OnionFlake.jpg') ?>" alt="blog-thumb">
					</div>
					<div class="desc" style="padding: 15px !important;">
						<h3 class="title-about font-bold">Why Choose Us</h3>
						<p class="sapo" style="text-align: justify">As an Indian-based company, we aim to manufacture, export, supply and deliver high quality food ingredients from dehydrated vegetables, spices, chilies, and natural food colouring. We are not only an ingredients manufacturer; we also provide customized solutions based on the client’s requirement. We stand out in this crowded market space locally and globally in the following ways.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="post">
					<div class="img-wrapper js-set-bg-blog-thumb">
						<img src="<?= base_url('assets/images/MintLeaves.jpg') ?>" alt="blog-thumb">
					</div>
					<div class="desc" style="padding: 15px !important;">
						<h3 class="title-about font-bold">What We Do</h3>
						<p class="sapo" style="text-align: justify"><b>1.</b> Using a high-quality manufacturing base of natural ingredients produced on our farms.
							<b>2.</b> Implementing methods to maintain pure, healthy, and safe food products
							<b>3.</b> Strategic location of Nashik which is located in Maharashtra which enjoys access to Nhava Sheva port in Mumbai & next to Gujarat having Mundra Port and both these places are known for thriving fresh fruits and vegetables.
							<b>4.</b> Maintaining stringent quality checks at every stage to provide contaminant-free products that ensure aroma and flavour.
							<b>5.</b> Possessing and using State-of-the-Art packaging processes to ensure purity and freshness.
							<b>6.</b> Fulfilling international & local requirements ranging from tastebuds to shipping procedures.
							<b>7.</b> Having experts with detailed knowledge of agriculturally based food ingredient products.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section><br>
	<div class="call-to-action-style-1">
		<img class="rellax bg-overlay" src="<?= base_url('assets/images/spices.jpg') ?>" alt="" />
		<div class="overlay-call-to-action"></div>
		<div class="container">
			<div class="row">
				<h2 style="font-weight: 600;">Dehydrated - Spray Dried - Spices</h2>
				<a class="btn btn-brand pill" href="<?= base_url('products') ?>">VIEW MORE </a>
			</div>
		</div>
	</div>
</section>

<!--     <section class="boxed-sm">
      <div class="container">
        <div class="heading-wrapper text-center">
          <h3 class="heading font-bold">Dehydrated Products</h3>
        </div>
        <div class="row">
          <div class="creative-layout-post-style-1">
            <div class="post-creative-style-1 right-thumb">
              <div class="col-sm-6">
                <div class="desc">
                  <h3>
                    <a href="#" class="font-bold">Onion Flakes</a>
                  </h3>
                  <p class="sapo hidden-sm hidden-xs">We provide all these products in dehydrated as well as spray dried form.
                    We provide all these products in dehydrated as well as spray dried form.
                  We provide all these products in dehydrated as well as spray dried form. </p>
                  <a class="buttonOverlay text-center font-bold-btn" href="<?= base_url('products') ?>">VIEW MORE</a>
                </div>
              </div>
              <br />
              <div class="col-sm-6">
                <div class="img-wrapper">
                  <a href="#">
                    <img class="img-responsive same_img_home" src="<?= base_url('assets/images/Dehydrated_Red_Onion_Flakes.jpg') ?>" alt="Image">
                  </a>
                  <h3 class="cate">
                    <strong>01 </strong>
                  </h3>
                </div>
              </div><br>
            </div>
            <div class="post-creative-style-1 left-thumb">
              <div class="col-sm-6">
                <div class="img-wrapper">
                  <h3 class="cate d-none">
                    <strong>02 </strong>
                  </h3>
                  <a href="#">
                    <img class="img-responsive same_img_home" src="<?= base_url('assets/images/Dehydrated_Garlic_Flakes.png') ?>" alt="Image">
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="desc">
                  <h3>
                    <a href="#" class="font-bold">Garlic Flakes</a>
                  </h3>
                  <p class="sapo hidden-sm hidden-xs">We provide all these products in dehydrated as well as spray dried form.
                    We provide all these products in dehydrated as well as spray dried form.
                  We provide all these products in dehydrated as well as spray dried form. </p>
                  <a class="buttonOverlay text-center font-bold-btn" href="<?= base_url('products') ?>">VIEW MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section> -->
  <br />
  <br />
  <br />

<!--     <footer class="footer-style-2">
      <div class="copy-right style-1">
        <div class="container">
          <div class="row">
            <div class="copy-right-inner">
              <p>Copyright © 2020 Designed by <a href="https://www.ddsio.com" target="_blank">DDSIO</a>. All rights
              reserved.</p>
              <div class="widget widget-footer widget-footer-creadit-card">
                <ul class="list-unstyle">
                  <li>
                    <a href="<?= base_url('about') ?>">About Us</a>
                  </li>
                  <li style="padding:10px;">
                    <a href="<?= base_url('products') ?>">Products</a>
                  </li>
                  <li style="padding:10px;">
                    <a href="<?= base_url('contact') ?>">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  </footer> -->
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
<!--   <script type="text/javascript">
  	document.onreadystatechange = function() {
  		if (document.readyState === "complete") {
  			// $("#panel_left").addClass("panel_left");
  			// $("#panel_right").addClass("panel_right");
  			$("#loader").addClass("loaded-circle");
  			$("#loader-img").addClass("loaded-img");
  			$("#preloader").addClass("loaded-img");
  		}
  	}
  </script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
  <script type="text/javascript">
  	var tl = new TimelineMax({
  		repeat: -1
  	});

  	tl.add(
  		TweenMax.from(".logo-svg", 2, {
  			scale: 0.5,
  			rotation: 360,
  			ease: Elastic.easeInOut
  		})
  		);

  	tl.add(
  		TweenMax.to(".logo-svg", 2, {
  			scale: 0.5,
  			rotation: 360,
  			ease: Elastic.easeInOut
  		})
  		);
  	</script>
  	<script> 
  		document.onreadystatechange = function() { 
  			if (document.readyState !== "complete") { 
  				document.querySelector( 
  					"body").style.visibility = "hidden"; 
  				document.querySelector( 
  					".wrapper_loader").style.visibility = "visible"; 
  			} else { 
  				document.querySelector( 
  					".wrapper_loader").style.display = "none"; 
  				document.querySelector( 
  					"body").style.visibility = "visible"; 
  			} 
  		}; 
  	</script> 
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
  	<!-- <script src="<?= base_url('assets/js/library/jquery.min.js') ?>"></script> -->
  	<script src="<?= base_url('assets/js/googletrans.js') ?>"></script>
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
  	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/revolution/css/settings.css') ?>" />
  	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/revolution/css/layers.css') ?>" />
  	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/revolution/css/navigation.css') ?>" />
  	<script src="<?= base_url('assets/revolution/js/jquery.themepunch.tools.min.js') ?>"></script>
  	<script src="<?= base_url('assets/revolution/js/jquery.themepunch.revolution.min.js') ?>"></script>
  	<script src="<?= base_url('assets/revolution/js/extensions/revolution.extension.actions.min.js') ?>"></script>
  	<script src="<?= base_url('assets/revolution/js/extensions/revolution.extension.carousel.min.js') ?>"></script>
  	<script src="<?= base_url('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') ?>"></script>
  	<script src="<?= base_url('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') ?>"></script>
  	<script src="<?= base_url('assets/revolution/js/extensions/revolution.extension.migration.min.js') ?>"></script>
  	<script src="<?= base_url('assets/revolution/js/extensions/revolution.extension.navigation.min.js') ?>"></script>
  	<script src="<?= base_url('assets/revolution/js/extensions/revolution.extension.parallax.min.js') ?>"></script>
  	<script src="<?= base_url('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') ?>"></script>
  	<script src="<?= base_url('assets/revolution/js/extensions/revolution.extension.video.min.js') ?>"></script>
  	<script src="<?= base_url('assets/js/global.js') ?>"></script>
  	<script src="<?= base_url('assets/js/config-banner-slider-3.js') ?>"></script>
  	<script src="<?= base_url('assets/js/config-mm-menu.js') ?>"></script>
  	<script src="<?= base_url('assets/js/config-set-bg-blog-thumb.js') ?>"></script>
  	<script src="<?= base_url('assets/js/config-carousel-product-quickview.js') ?>"></script>
  </body>

  </html>