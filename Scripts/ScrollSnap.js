if (document.getElementById('indexBody') !== false) {
  dingser = document.getElementsByClassName('Divider');

  for (var i = 0; i < dingser.length; i++) {
    dingser[i].setAttribute("style", "scroll-snap-align: start;");
  }

}
