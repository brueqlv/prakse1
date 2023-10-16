// For showing menu on smaller screens
const menuIcon = document.getElementById("menu-icon");
const closeIcon = document.getElementById("close-icon");
const headerNavbarPopup = document.querySelector(".header-navbar-popup");

menuIcon.addEventListener("click", function () {
    headerNavbarPopup.style.display = "flex";
    menuIcon.style.display = "none";
    closeIcon.style.display = "flex";
});

closeIcon.addEventListener("click", function () {
    headerNavbarPopup.style.display = "none";
    closeIcon.style.display = "none";
    menuIcon.style.display = "flex";
});