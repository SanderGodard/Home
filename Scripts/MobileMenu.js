var bg = document.getElementsByClassName("Background");
var bglen = bg.length;
var navh = document.getElementById("Next").offsetHeight;

function MenuToggle() {
  var x = document.getElementById("MobileNav");
  if (x.style.height === 197 + "px") {
    x.style.height = "0px";
    for (var i = 0; i < bglen; i++) {
      bg[i].style.top = navh + "px";
    };
  } else {
    x.style.height = 197 + "px";
    for (var i = 0; i < bglen; i++) {
      bg[i].style.top = navh + 197 + "px";
    };
  }
  var a = document.getElementById("MobileMenu");
  if (a.innerHTML === "notes") {
    a.innerHTML = "clear";
  } else {
    a.innerHTML = "notes";
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
  var a = document.getElementById("MobileMenuHeader");
  if (a.innerHTML === "notes") {
    a.innerHTML = "clear";
  } else {
    a.innerHTML = "notes";
  }
}
