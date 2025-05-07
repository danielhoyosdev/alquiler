const item_submenu = document.querySelector(".item-submenu");
const submenu = document.querySelector(".submenu");

item_submenu.addEventListener("click", () => {
    submenu.style.display = (submenu.style.display === "block") ? "none" : "block";
});

/* SLIDE */
// document.addEventListener("DOMContentLoaded", () => {
//     const slides = document.querySelector(".slides");
//     let index = 0;
//
//     setInterval(() => {
//         index = (index + 1) % 3;
//         slides.style.transform = `translateX(-${index * 100}%)`;
//     }, 10000);
// });