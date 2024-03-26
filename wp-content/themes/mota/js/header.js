document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav_menu");
  const navLinks = document.querySelectorAll(".nav_link");

  hamburger.addEventListener("click", function () {
    if (navMenu.style.display === "none") {
      navMenu.style.display = "flex";
      hamburger.textContent = "✖";
    } else {
      navMenu.style.display = "none";
      hamburger.textContent = "☰";
    }
  });

  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      var width = window.innerWidth;
      if (width <= 768) {
        navMenu.style.display = "none";
        hamburger.textContent = "☰";
      }
    });
  });

  window.addEventListener("resize", function () {
    var width = window.innerWidth;

    if (width > 768) {
      navMenu.style.display = "flex";
      hamburger.style.display = "none";
    } else {
      navMenu.style.display = "none";
      hamburger.style.display = "block";
    }
  });
});
