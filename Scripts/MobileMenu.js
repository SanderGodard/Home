var bg = document.getElementsByClassName("Background");
var bglen = bg.length;
var navh = document.getElementsByTagName("nav").offSetHeight;

for (var i = 0; i < bglen; i++) {
  console.log(bg[i]);
}

//console.log(bg);
//typeof(navh);



function MenuToggle() {
  var x = document.getElementById("MobileNav");
  if (x.style.height === 197 + "px") {
    x.style.height = "0px";
    bg.style.top = navh + "px";
  } else {
    x.style.height = 197 + "px";
    bg.style.top = navh + 197 + "px";

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
  var a = document.getElementById("MobileMenuHeader");
  if (a.innerHTML === "menu") {
    a.innerHTML = "clear";
  } else {
    a.innerHTML = "menu";
  }
}
