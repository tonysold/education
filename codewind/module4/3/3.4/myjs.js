function changeFontSize (selector, fontSize) {

let elems = document.querySelectorAll(selector);

for (let elem of elems) {
   elem.style.fontSize = fontSize;
}
}

