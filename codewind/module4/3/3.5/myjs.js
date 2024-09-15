function appendText(selector, text) {

   let selectorContent = document.querySelectorAll(selector);

   let addText = text;

   for (let content of selectorContent) {
      content.textContent += text;
   }
}

