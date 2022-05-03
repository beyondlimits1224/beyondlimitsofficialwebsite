const NavMenuSlide = () => {
  const iconburger = document.querySelector(".burger");
  const mobileMenu = document.querySelector(".mobile-menu");
  const closeMobileMenu = document.querySelector(".close");

  iconburger.addEventListener("click", showMenu);
  closeMobileMenu.addEventListener("click", closeMenu);

  function showMenu() {
    mobileMenu.classList.add("mobile-menu-active");
  }

  function closeMenu() {
    mobileMenu.classList.remove("mobile-menu-active");
  }
};

// initialize
NavMenuSlide();
