//Right Button Scroll
function Scroll() {
  var amount = document.getElementById("Project1").offsetWidth;
  var div = document.getElementById("Slider");
  var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  var v = .8
  var vw = (w / 100 * v)
  //div.scrollLeft += amount;
  div.scrollBy({
    left: amount + vw,
    top: 0,
    behavior: 'smooth'
  });
}
//Left Button Scroll
function ScrollLeft() {
  var amount = document.getElementById("Project1").offsetWidth;
  var div = document.getElementById("Slider");
  var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  var v = .8
  var vw = (w / 100 * v)
  //div.scrollLeft += amount;
  div.scrollBy({
    left: -(amount + vw),
    top: 0,
    behavior: 'smooth'
  });
}
