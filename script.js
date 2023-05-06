let menu = document.getElementById("menu-icon");
let navList = document.querySelector(".nav-list");

menu.onclick = () => {
  menu.classList.toggle("fa-x");
  navList.classList.toggle("open");
};
