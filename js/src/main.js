import {
  initMainSlider,
  initTestimoniosSlider,
} from "./slick-init";
import { abrirMenu, cerrarMenu } from "./menu-init";
import { openModal, closeModal } from "./modal-init";

let Main = {
  init: async function () {
    document.addEventListener("DOMContentLoaded", () => {
      abrirMenu();
      cerrarMenu();
      openModal();
      closeModal();
      initMainSlider();
      initTestimoniosSlider();
    });
  },
};

Main.init();
