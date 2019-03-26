// The function actually applying the offset
function offsetAnchor() {
  if(location.hash.length !== 0) {
    loc = location.hash;
    loc = loc.replace("#", ""); // Removing the # from the ID so we can look for it.
    ting = document.getElementById(loc); // finding element

    window.scrollTo(0, (ting.offsetTop - 130));

  }
}

// This will capture hash changes while on the page
window.addEventListener("hashchange", offsetAnchor);

// This is here so that when you enter the page with a hash,
// it can provide the offset in that case too. Having a timeout
// seems necessary to allow the browser to jump to the anchor first.
window.setTimeout(offsetAnchor, 1);
// The delay of 1 is arbitrary and may not always work right (although it did in my testing).

// https://stackoverflow.com/questions/17534661/make-anchor-link-go-some-pixels-above-where-its-linked-to
