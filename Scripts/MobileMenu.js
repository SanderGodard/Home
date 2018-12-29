function MenuToggle() {
  var x = document.getElementById("MobileNav");
  if (x.style.height === "197px") {
    x.style.height = "0px";
  } else {
    x.style.height = "197px";
  }
  var a = document.getElementById("MobileMenu");
  if (a.innerHTML === "menu") {
    a.innerHTML = "clear";
  } else {
    a.innerHTML = "menu";
  }
}
