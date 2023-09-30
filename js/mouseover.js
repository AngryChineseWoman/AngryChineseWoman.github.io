

var kathy = document.getElementById("kathy")


kathy.onmouseover = function() {mouseOver()};
kathy.onmouseout = function() {mouseOut()};



function mouseOver() {

  kathy.style.color = "blue";
}

function mouseOut() {
  kathy.style.color = "black";

}

