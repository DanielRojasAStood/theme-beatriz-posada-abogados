import $ from "jquery";

const $header = $("[data-header]");
const $menuMobile = $("[data-menu-mobile]");
const $botonAbrirMenu = $("[data-abrir-menu]");
const $botonCerrarMenu = $("[data-cerrar-menu]");

const $dataFooterOpenMenu = $("[data-footer-open-menu]");
$dataFooterOpenMenu.click(openMenuFooter);

$(document).ready(function () {
  $botonAbrirMenu.click(abrirMenu);
  $botonCerrarMenu.click(cerrarMenu);
});

export function abrirMenu() {
  $("body").addClass("is-overflow");
  $menuMobile.toggleClass("is-active");
}

export function cerrarMenu() {
  $("body").removeClass("is-overflow");
  $menuMobile.removeClass("is-active");
}

export function openMenuFooter(e) {
  var $currentTarget = $(e.currentTarget);
  var $menu = $currentTarget.next(".seccionFooter__menu");

  $(".seccionFooter__menu").not($menu).slideUp();
  $(".activo").not($currentTarget).removeClass("activo");

  $menu.slideToggle();
  $currentTarget.toggleClass("activo");
}

function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();
  var elemTop = $(elem).offset().top;
  return elemTop <= docViewBottom && elemTop >= docViewTop;
}

function iniciarContador($counter) {
  var targetNumber = $counter.data("numero");
  var duration = 2000; // Duración en milisegundos (2 segundos)

  $({ Counter: 0 }).animate(
    { Counter: targetNumber },
    {
      duration: duration,
      easing: "swing", // Tipo de animación (puedes cambiarla)
      step: function () {
        $counter.text("+ " + Math.ceil(this.Counter));
      },
      complete: function () {
        $counter.data("iniciado", true); // Marcar el contador como iniciado
      },
    }
  );
}

$(window)
  .on("scroll", function () {
    $(".contador").each(function () {
      var $counter = $(this);
      if (isScrolledIntoView($counter) && !$counter.data("iniciado")) {
        iniciarContador($counter);
      }
    });
  })
  .trigger("scroll"); // Verificar al cargar la página

$(window).scroll(function () {
  if ($(this).scrollTop() > 10) {
    $header.addClass("is-scroll");
  } else {
    $header.removeClass("is-scroll");
  }
});
