import {
  initMainSlider,
} from "./slick-init";
import { toggleMenu, closeMenu } from "./menu-init";
import { openModal, closeModal } from "./modal-init";

let Main = {
  init: async function () {
    document.addEventListener("DOMContentLoaded", () => {
      toggleMenu();
      closeMenu();
      openModal();
      closeModal();
      initMainSlider();
    });
  },
};

Main.init();
