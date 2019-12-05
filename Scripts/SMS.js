if (document.getElementById("SMS") !== false) {

  var a = document.getElementById("SMS");
  var current = a.innerHTML;

  function SMSfunc() {
    if (a.innerHTML == current) {
      a.style.width = "0px";
      //a.style.minWidth = "0px";
      setTimeout(function() {
        a.innerHTML = '+47 901 89 461';
      }, 500);
      a.style.width = "";
      //a.style.minWidth = "";

    } else {
      a.style.width = "0px";
      //a.style.minWidth = "0px";
      setTimeout(function() {
        a.innerHTML = current;
      }, 500);

      a.style.width = "";
      //a.style.minWidth = "";
    }
  }
}
