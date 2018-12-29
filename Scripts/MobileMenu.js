//Function to toggle menu
var nav = document.getElementById("MobileNav");
var menubtn = document.getElementById("MobileMenu");

function MenuToggle() {
  if (nav.style.height === "197px") {
    nav.style.height = "0px";
    menubtn.innerHTML = "menu";
  }
  else {
    nav.style.height = "197px";
    menubtn.innerHTML = "clear";
  }
}
