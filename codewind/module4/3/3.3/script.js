let input1 = document.querySelector('#input1');
let input2 = document.querySelector('#input2');
let btn = document.querySelector('#btn');
let result = document.querySelector('#result');

btn.addEventListener ('click', function() {
   result.textContent = +input1.value + +input2.value; 
});