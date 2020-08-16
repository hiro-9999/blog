# Functional Programming in JavaScript
“https://github.com/cristi-salcescu/functional-programming-in-javascript ”

# functional library
https://ramda.cn/

“npm install immutable --save”
https://immutable-js.github.io/immutable-js/
“import { List } from 'immutable';”

https://lodash.com/
```
“npm i lodash --save
Here is how the transformations look like in a pipeline.
import { pipe } from 'lodash/fp';
const shortText = pipe(
capitalize,
shortenText
)("this is a long text");
console.log(shortText);
//"This is”

 
```
# Promise
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise/allSettled

# axios
https://github.com/svrcekmichal/redux-axios-middleware

# redux
https://redux.js.org/advanced/middleware

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
