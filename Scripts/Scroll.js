var div = document.getElementById("Slider");
var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var prosj = document.getElementsByClassName('Project');

function fixWidth() {
  for (var i = 0; i < prosj.length; i++) {
    var sp = prosj[i].lastElementChild.lastElementChild;
    sp.style.width = (div.offsetWidth - (w / 100));
  }
}

//Right Button Scroll
function Scroll(dirr) {
  var amount = document.getElementById("Mosala").offsetWidth;
  var margin = .5;
  var vw = (w / 100) + (margin * 2);
  //div.scrollLeft += amount;
  if (dirr == "+") {

    div.scrollBy({
      left: (amount + vw),
      top: 0,
      behavior: 'smooth'
    });
  } else if (dirr == "-") {

    div.scrollBy({
      left: -(amount + vw),
      top: 0,
      behavior: 'smooth'
    });
  } else {
    console.log("Fiks horisontale scrolling arrows Sander!");
  }
}

// copy past        credit:https://codepen.io/thenutz/pen/VwYeYEE
let isDown = false;
let startX;
let scrollLeft;

div.addEventListener('mousedown', (e) => {
  isDown = true;
  div.classList.add('drar');
  e.preventDefault();
  startX = e.pageX - div.offsetLeft;
  scrollLeft = div.scrollLeft;
});
div.addEventListener('mouseleave', (e) => {
  isDown = false;
  e.preventDefault();
  div.classList.remove('drar');
});
div.addEventListener('mouseup', (e) => {
  isDown = false;
  e.preventDefault();
  div.classList.remove('drar');
});
div.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  // pr = e.children;
  // for (var i = 0; i < pr.length; i++) {
  //   pr[i].preventDefault();
  // }
  const x = e.pageX - div.offsetLeft;
  const walk = (x - startX) * 1; //scroll-fast
  div.scrollLeft = scrollLeft - walk;
  //console.log(walk);
});
