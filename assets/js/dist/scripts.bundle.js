(() => {
  // assets/js/modules/header.js
  var menuMobileHandler = document.querySelector(".btn-menu-mobile");
  var mobileMenu = document.querySelector(".mobile-menu-bg");
  var btnClose = document.querySelector(".btn-close-menu");
  var header = document.querySelector("header");
  if (header) {
    menuMobileHandler.addEventListener("click", () => {
      mobileMenu.classList.toggle("show");
    });
    btnClose.addEventListener("click", () => {
      mobileMenu.classList.toggle("show");
    });
  }
})();
