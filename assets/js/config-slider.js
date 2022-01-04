'use strict';
$(function() {
  var $sliderCarousel = $('.js-swiper-carousel');
  $sliderCarousel.each(function () {
    var element = $(this),
      defaultItem = element.attr('data-item') || "4",
      mdItem = element.attr('data-item-md') || "3",
      smItem = element.attr('data-item-sm') || "2",
      xsItem = element.attr('data-item-xs') || "1",
      xxsItem = element.attr('data-item-xxs') || "1",
      itemSpace = element.attr('data-space') || "0",
      autoPlay = element.attr('data-autoplay') || '0',
      sliderPagination = element.attr('data-pagination') || "",
      nextButton = element.attr('data-next') || "",
      prevButton = element.attr('data-prev') || "";

      var swiper = new Swiper(element, {
        slidesPerView: defaultItem,
        pagination: sliderPagination,
        paginationClickable: true,
        nextButton: nextButton,
        prevButton: prevButton,
        spaceBetween: Number(itemSpace),
        autoplay: Number(autoPlay),
        breakpoints: {
          1024: {
            slidesPerView: mdItem,
          },
          768: {
            slidesPerView: smItem,
          },
          480: {
            slidesPerView: xsItem,
          },
          320: {
            slidesPerView: xxsItem
          }
        },
      })
  });
}); 