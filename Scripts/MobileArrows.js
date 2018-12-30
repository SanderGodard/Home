function arrowsMargin() {

  var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

  //alert(w)
  if (w <= 575) {
    var arrowL = document.getElementById("LeftArrow");
    var arrowR = document.getElementById("RightArrow");
    var slider = document.getElementById("Slider");
    var arrowH = arrowL.offsetHeight;
    var height = slider.offsetHeight;
    var margin = ((height / 2) - (arrowH / 2));

    arrowL.style.marginTop = margin + "px";
    arrowR.style.marginTop = "-" + (height - margin) + "px";
  }
}
