import $ from "jquery";

const $dataOpenModal = $("[data-open-modal]");
const $botonCloseModal = $("[data-close-modal]");
const $modals = $("[data-modal]");
let $videoIframe;
let $videoTitulo;
let $videoCategoria;

$dataOpenModal.click(openModal);

function openModal() {
  $("body").css('overflow', 'hidden');
  const url = "https://www.youtube.com/embed";
  const modalId = $(this).data("open-modal");
  const videoUrl = $(this).data("video-url");
  const videoTitle = $(this).data("video-title");
  const videoCategoria = $(this).data("video-categoria");
  const $modal = $(`[data-modal="${modalId}"]`);
  const $videoContainer = $modal.find(".modal__video");
  const $videoHtmlTitulo = $modal.find(".titulo");
  const $videoHtmlCategoria = $modal.find(".video-categoria");

  // Crear el iframe
  $videoIframe = $("<iframe>", {
    width: "560",
    height: "315",
    src: `${url}/${videoUrl}?autoplay=1`,
    frameborder: "0",
    allow: "autoplay; encrypted-media",
    allowfullscreen: true
  });

  $videoTitulo = $('<h2>').text(`${videoTitle}`);
  $videoCategoria = $('<span>').text(`${videoCategoria}`);

  // Asignar el iframe al contenedor
  $videoContainer.html($videoIframe);
  $videoHtmlTitulo.html($videoTitulo);
  $videoHtmlCategoria.html($videoCategoria);
  $modal.fadeIn();
}


$botonCloseModal.click(closeModal);

function closeModal() {
  $("body").css('overflow', '');
  $modals.fadeOut();

  // Eliminar el contenido HTML del iframe
  $(".modal__video").html("");
}
export { openModal, closeModal };
