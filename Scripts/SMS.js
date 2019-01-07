var a = document.getElementById("SMS");
var current = a.innerHTML;

function SMSfunc() {
  if (a.innerHTML == current) {
    a.innerHTML = '+47 901 89 461';

  } else {
    a.innerHTML = current;
  }
}
