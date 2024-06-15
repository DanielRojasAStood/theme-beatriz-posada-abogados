import {
  initBannerSlick,
  initMainSlider,
  initTestimoniosSlider,
  initContadorSlider,
} from "./slick-init";
import { abrirMenu, cerrarMenu } from "./menu-init";
import { openModal, closeModal } from "./modal-init";
import {} from "./cargar-mas-init";
import {} from "./validar-formulario";
import {} from "./loading-init";

let Main = {
  init: async function () {
    document.addEventListener("DOMContentLoaded", () => {
      abrirMenu();
      cerrarMenu();
      openModal();
      closeModal();
      initBannerSlick();
      initMainSlider();
      initTestimoniosSlider();
      initContadorSlider();
    });
  },
};

Main.init();
