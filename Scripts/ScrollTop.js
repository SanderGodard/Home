function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function navappear() {
  if (document.getElementsByTagName("header") !== false) {
      
    var elementTarget = document.getElementsByTagName("header")[0];
    if (window.scrollY > (elementTarget.offsetTop + elementTarget.offsetHeight - 1)) {
      document.getElementById('Next').style.height = "70px";
    } else if (window.scrollY < (elementTarget.offsetTop + elementTarget.offsetHeight)) {
      //document.getElementById('Next').style.display = "none";
    }
  }
}

function scrollToSite() {
  document.getElementById('Next').scrollIntoView();
  navappear();
}

if (document.getElementById('indexBody') !== false) {
  window.addEventListener("scroll", navappear);
}
