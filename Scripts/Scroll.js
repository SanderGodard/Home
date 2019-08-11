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
