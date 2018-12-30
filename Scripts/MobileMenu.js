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

function HeaderMenuToggle() {
  var x = document.getElementById("HeaderNav");
  if (x.style.height === "267px") {
    x.style.height = "0px";
    x.style.paddingTop = "0px";
  } else {
    x.style.height = "267px";
    x.style.paddingTop = "70px";
  }
  var a = document.getElementById("MobileHeaderMenu");
  if (a.innerHTML === "menu") {
    a.innerHTML = "clear";
  } else {
    a.innerHTML = "menu";
  }
}
