document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav_menu");
  const navLinks = document.querySelectorAll(".nav_menu a");

  // Écouteur d'événement pour le clic sur le hamburger
  hamburger.addEventListener("click", function () {
    // Ajoute ou supprime la classe "active" sur l'icône du hamburger
    hamburger.classList.toggle("active");
    // Ajoute ou supprime la classe "active" sur le menu de navigation
    navMenu.classList.toggle("active");
  });

  // Parcourir tous les liens du menu de navigation
  navLinks.forEach(function (link) {
    // Ajoute un écouteur d'événement pour le clic sur chaque lien
    link.addEventListener("click", function () {
      // Supprime la classe "active" de l'icône du hamburger et du menu de navigation
      hamburger.classList.remove("active");
      navMenu.classList.remove("active");
    });
  });
});
