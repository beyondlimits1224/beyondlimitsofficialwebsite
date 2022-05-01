const NavMenuSlide = () => {
  const burgerMenu = document.querySelector(".burger");
  const mobileMenu = document.querySelector(".navmenu .flex-container");
  const closeMobileMenu = document.querySelector(".close");

  burgerMenu.addEventListener("click", showMenu);
  closeMobileMenu.addEventListener("click", closeMenu);

  function showMenu() {
    mobileMenu.classList.add("navmenu-active");
  }

  function closeMenu() {
    mobileMenu.classList.remove("navmenu-active");
  }
};

// initialize
NavMenuSlide();
