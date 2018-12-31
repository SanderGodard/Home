function SearchFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("Search");
  filter = input.value.toUpperCase();
  ul = document.getElementById("SearchList");
  li = ul.getElementsByClassName("Project");
  for (i = 0; i < li.length; i++) {
    title = li[i].getElementsByTagName("h3")[0];
    if (title.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
