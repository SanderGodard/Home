//Function that opens modal, fetches info from the galleri item I clicked on and puts it in the modal.
function ModalOn(project) {

  var image = document.getElementById('ModalImage').src;
  var title = document.getElementById('ModalTitle').innerHTML;
  var sub = document.getElementById('ModalSubheader').innerHTML;
  var info = document.getElementById('ModalInfo').innerHTML;
  var link = document.getElementById('ModalLink').href;

  var item = document.getElementById(project);

  console.log(sub); //

  var itemImage = item.getElementsByTagName("img")[0].src;
  var itemTitle = item.getElementsByTagName("h3")[0].innerHTML;
  var itemSub = item.getElementsByTagName("span")[0].innerHTML;
  var itemInfo = item.getElementsByTagName("p")[0].innerHTML;
  var itemLink = item.getElementsByTagName("a")[0].href;

  console.log(itemSub); //

  image = itemImage;
  title = itemTitle;
  sub = itemSub;
  info = itemInfo;
  link = itemLink;

  console.log(sub); //

  document.getElementById("GalleriModal").style.display = "block";


};



function ModalOff() {
  document.getElementById("GalleriModal").style.display = "none";
};
window.onclick = function(event) {
  if (event.target == document.getElementById("GalleriModal")) {
    document.getElementById("GalleriModal").style.display = "none";
  }
}
