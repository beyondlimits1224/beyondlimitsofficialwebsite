const NavMenuSlide = () => {
  const iconburger = document.querySelector(".burger");
  const mobileMenu = document.querySelector(".mobile-menu");
  const closeMobileMenu = document.querySelector(".close");
  const navLinks = document.querySelectorAll(".mobile-menu  li");

  iconburger.addEventListener("click", showMenu);
  closeMobileMenu.addEventListener("click", closeMenu);

  // reset animations
  function reset_animation() {
    navLinks.forEach((link, index) => {
      link.style.animation = null;
    });
  }

  function showMenu() {
    mobileMenu.classList.add("mobile-menu-active");
    // animate links
    navLinks.forEach((link, index) => {
      link.style.animation = `navLinkFade 0.5s forwards ${index / 7 + 1}s`;
    });
  }

  function closeMenu() {
    mobileMenu.classList.remove("mobile-menu-active");
    reset_animation();
  }
};

// initialize
NavMenuSlide();
