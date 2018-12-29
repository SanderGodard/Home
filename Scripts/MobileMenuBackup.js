//Function to search for property value
function GetStyle(CLASSname) {
  var styleSheets = document.styleSheets;
  var styleSheetsLength = styleSheets.length;
  for (var i = 0; i < styleSheetsLength; i++) {
    if (styleSheets[i].rules) {
      var classes = styleSheets[i].rules;
    } else {
      try {
        if (!styleSheets[i].cssRules) {
          continue;
        }
      }
      //Note that SecurityError exception is specific to Firefox.
      catch (e) {
        if (e.name == 'SecurityError') {
          console.log("SecurityError. Cant read: " + styleSheets[i].href);
          continue;
        }
      }
      var classes = styleSheets[i].cssRules;
    }
    for (var x = 0; x < classes.length; x++) {
      if (classes[x].selectorText == CLASSname) {
        var ret = (classes[x].cssText) ? classes[x].cssText : classes[x].style.cssText;
        if (ret.indexOf(classes[x].selectorText) == -1) {
          ret = classes[x].selectorText + "{" + ret + "}";
        }
        return ret;
      }
    }
  }
}

var objName = "SideArrow";
var objStyle = "display: ";
var objProperty = "inline-block";

var fullObjStyle = GetStyle("." + objName);
var displayIndex = fullObjStyle.indexOf(objStyle);
var displayProperty = fullObjStyle.slice((displayIndex + objStyle.length), ((displayIndex + objStyle.length) + objProperty.length))

console.log(displayProperty);

//Function to toggle menu
var nav = document.getElementById("MobileNav");
var menubtn = document.getElementById("MobileMenu");
//var arrows = document.getElementsByClassName(objName);

//var style = window.getComputedStyle(arrows);
//margin = style.getPropertyValue('margin-top');

var arrows = Array.prototype.slice.call(document.querySelectorAll("." + objName));
var margin = arrows.map(x => x.style.marginTop);



console.log(margin);
console.log(arrows);


var mvalue = arrows.style.marginTop;
var tvalue = 197;
var zvalue = mvalue + tvalue;

console.log(mvalue);
console.log(zvalue);


function MenuToggle() {
  if (arrows.some(x => x.style.display == objProperty) && nav.style.height === "197px") {
    nav.style.height = "0px";
    menubtn.innerHTML = "menu";
    arrows.style.marginTop = "mvalue" + "px";

  }
  else if (arrows.some(x => x.style.display == objProperty) && nav.style.height === "0px") {
    nav.style.height = "197px";
    menubtn.innerHTML = "clear";
    arrows.style.marginTop = "zvalue" + "px";
  }
  else if (arrows.some(x => x.style.display != objProperty) && nav.style.height === "197px") {
    nav.style.height = "0px";
    menubtn.innerHTML = "clear";
    arrows.style.marginTop = "mvalue" + "px";
  }
  else {
    nav.style.height = "197px";
    menubtn.innerHTML = "clear";
    arrows.style.marginTop = "mvalue" + "px";
  }
}