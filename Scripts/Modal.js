//Function that opens modal, fetches info from the galleri item I clicked on and puts it in the modal.
function ModalOn(project) {

  var item = document.getElementById(project);

  var itemImage = item.getElementsByTagName("img")[0].src;
  var itemTitle = item.getElementsByTagName("h3")[0].innerHTML;
  var itemSub = item.getElementsByTagName("span")[0].innerHTML;
  var itemInfo = item.getElementsByTagName("p")[0].innerHTML;
  var itemLink = item.getElementsByTagName("a")[0].href;

  document.getElementById('ModalImage').src = itemImage;
  document.getElementById('ModalTitle').innerHTML = itemTitle;
  document.getElementById('ModalSubheader').innerHTML = itemSub;
  document.getElementById('ModalInfo').innerHTML = itemInfo;
  document.getElementById('ModalLink').href = itemLink;

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