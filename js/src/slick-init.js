// slick-init.js

import $ from "jquery";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import "slick-carousel";

export function initMainSlider() {
  $slickNoticias = $(".slickNoticias");
  slickNoticiasSettings = {
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    infinite: false,
    adaptiveHeight: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
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
  $slickNoticias.slick(slickNoticiasSettings);
}
