  // sidebar open close js code
  let navLinks = document.querySelector(".nav-links");
  let menuOpenBtn = document.querySelector(".navbar .bx-menu");
  let menuCloseBtn = document.querySelector(".nav-links .bx-x");

  menuOpenBtn.onclick = function () {
    navLinks.style.left = "0";
  }

  menuCloseBtn.onclick = function () {
    navLinks.style.left = "-100%";
  }

  // sidebar submenu open close js code
  let htmlcssArrow = document.querySelector(".htmlcss-arrow");
  let htmlCssSubMenu = document.querySelector(".htmlCss-sub-menu");

  htmlcssArrow.onclick = function () {
    htmlCssSubMenu.classList.toggle("show-sub-menu");
  }

  let moreArrow = document.querySelector(".more-arrow");
  let moreSubMenu = document.querySelector(".more-sub-menu");

  moreArrow.onclick = function () {
    moreSubMenu.classList.toggle("show-sub-menu");
  }

  let jsArrow = document.querySelector(".js-arrow");
  let jsSubMenu = document.querySelector(".js-sub-menu");

  jsArrow.onclick = function () {
    jsSubMenu.classList.toggle("show-sub-menu");
  }