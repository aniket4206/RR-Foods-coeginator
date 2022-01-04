'use strict';
$(document).ready(function() {
  $(".animsition").animsition({
  inClass: 'fade-in',
  outClass: 'fade-out',
  inDuration: 1500,
  outDuration: 800,
  linkElement: 'a:not([target="_blank"]):not([href^="#"]),  .animsition-link',
  loading: true,
  loadingParentElement: 'body',
  loadingClass: 'animsition-loading',
  loadingInner: '<img src="./assets/images/spin.svg" />',
  timeout: false,
  timeoutCountdown: 5000,
  onLoadEvent: true,
  browser: [ 'animation-duration', '-webkit-animation-duration'],
  overlay : false,
  overlayClass : 'animsition-overlay-slide',
  overlayParentElement : 'body',
  transition: function(url){ window.location.href = url; }
  });
});