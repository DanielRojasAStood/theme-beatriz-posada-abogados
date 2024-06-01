import $ from "jquery";

const $header = $("[data-header]");
const $menuMobile = $("[data-menu-mobile]");
const $botonToggleMenu = $("[data-toggle-menu]");
const $botonLink = $("[data-link]");

const $dataFooterOpenMenu = $("[data-footer-open-menu]");
$dataFooterOpenMenu.click(openMenuFooter);

$(document).ready(function () {
  $botonToggleMenu.click(toggleMenu);
  $botonLink.click(closeMenu);

  $botonToggleMenu.click(function (event) {
    event.preventDefault();
  });
});

export function toggleMenu() {
  $(this).toggleClass("is-active");
  $menuMobile.toggleClass("is-active");
}

export function closeMenu() {
  $botonToggleMenu.removeClass("is-active");
  $menuMobile.removeClass("is-active");
}

export function openMenuFooter(e) {
  $(e.currentTarget).next(".seccionFooter__menu").slideToggle();
}

$(window).scroll(function () {
  if ($(this).scrollTop() > 10) {
    $header.addClass("is-scroll");
  } else {
    $header.removeClass("is-scroll");
  }

  // $('section').each(function() {
  //   if (isScrolledIntoView($(this), $(window).height() / 4)) {
  //     $(this).addClass('animated');
  //   }
  // });

  // function isScrolledIntoView(elem, threshold) {
  //   var docViewTop = $(window).scrollTop();
  //   var docViewBottom = docViewTop + $(window).height();
  //   var elemTop = $(elem).offset().top;
  //   var elemBottom = elemTop + $(elem).height();
  //   var middleThreshold = $(window).height() / 2;
  //   return ((elemTop + threshold <= docViewBottom) && (elemBottom >= docViewTop + middleThreshold));
  // }
});
