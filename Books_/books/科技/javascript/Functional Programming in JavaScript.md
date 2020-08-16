# Functional Programming in JavaScript
“https://github.com/cristi-salcescu/functional-programming-in-javascript ”

npm install @babel/core @babel/node @babel/preset-env --save

npm install eslint --save-dev

npx eslint --init

npm install eslint-plugin-functional --save-dev

```
!function(){
console.log('start')
}();

“it can auto-execute.”
```
```
“This allows creating easier to read HTML strings.
function toGameHtml(game){
return `
<div>
${game.title}
</div>`;
}”

const numbers = [1, 3, 5, 7];
function add(total, n) {
return total + n;
}
const total = numbers.reduce(add, 0);

undefined
console.log(total);
```
抜粋:: Salcescu, Cristian  “Functional Programming in JavaScript (Functional Programming with JavaScript and React Book 4)”。 Apple Books  
