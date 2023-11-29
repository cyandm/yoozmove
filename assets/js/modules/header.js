import { overflowHidden as overflowHandler } from './general';

const menuMobileHandler = document.querySelector('.btn-menu-mobile');
const mobileMenu = document.querySelector('.mobile-menu-bg');
const btnClose = document.querySelector('.btn-close-menu');

const header = document.querySelector('header');

if (header) {
  menuMobileHandler.addEventListener('click', () => {
    mobileMenu.classList.toggle('show');
    overflowHandler();
  });
  btnClose.addEventListener('click', () => {
    mobileMenu.classList.toggle('show');
    overflowHandler();
  });
}
