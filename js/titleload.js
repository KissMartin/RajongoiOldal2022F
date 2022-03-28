const title = ["R", "i", "o", "t", "-", "G", "a", "m", "e", "s", "-", "f", "a", "n", "p", "a", "g", "e"];
var index = 0;
var decreasing = false;
setInterval(function () {
  document.title = "";
  for (let i = 0; i <= index; i++) {
    document.title += title[i];
  }

  if (decreasing == false) {
    index++;
  } else {
    index--;
  }

  if (index == title.length - 1) {
    decreasing = true;
  } else if (index == 0) {
    decreasing = false;
  }
}, 250);