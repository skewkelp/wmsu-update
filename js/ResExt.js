document.addEventListener("DOMContentLoaded", function () {
    let subNav = document.querySelector(".ResExtSubNavLinks");
    let dropdown = document.getElementById("ResExtSubNavDropDown-1");

    subNav.addEventListener("mouseenter", function () {
        dropdown.style.display = "block";
        dropdown.classList.add('ResExtShowDD');
    });

    subNav.addEventListener("mouseleave", function () {
        dropdown.style.display = "none";
    });
});