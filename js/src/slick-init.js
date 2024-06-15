// slick-init.js

import $ from "jquery";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import "slick-carousel";

export function initBannerSlick() {
  const $slickBanner = $(".slickBanner");
  const slickBannerSettings = {
    fade: true,
    cssEase: "linear",
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    touchMove: true,
    adaptiveHeight: true,
    draggable: true,
    dots: false,
    arrows: false,
    infinite: false,
  };
  $slickBanner.slick(slickBannerSettings);
}

export function initMainSlider() {
  const $slickEmpresas = $(".slickEmpresas");
  const slickEmpresasSettings = {
    slidesToShow: 6,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          adaptiveHeight: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          adaptiveHeight: true,
        },
      },
    ],
  };
  $slickEmpresas.slick(slickEmpresasSettings);
}

export function initTestimoniosSlider() {
  const $slickTestimonios = $(".slickTestimonios");
  const slickTestimoniosSettings = {
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    centerMode: true,
    centerPadding: "50px",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          centerMode: true,
          centerPadding: "10px",
        },
      },
      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          centerMode: false,
          centerPadding: "10px",
        },
      },
    ],
  };
  $slickTestimonios.slick(slickTestimoniosSettings);
}

export function initContadorSlider() {
  const $slickContador = $(".slickContador");
  const slickContadorSettings = {
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    infinite: true,
    centerMode: true,
    centerPadding: "0",
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          centerMode: true,
          centerPadding: "10px",
        },
      },
      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          centerMode: false,
          centerPadding: "10px",
        },
      },
    ],
  };
  $slickContador.slick(slickContadorSettings);
}
