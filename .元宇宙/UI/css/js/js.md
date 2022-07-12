https://developer.mozilla.org/ja/


https://nodejs.org/api/

# JavaScript: The Definitive Guide
https://github.com/davidflanagan/jstdg7
```js
let uniqueInteger = (function() { // Define and invoke
let counter = 0; // Private state of function below return function() { return counter++; };
}());
uniqueInteger() // => 0 
uniqueInteger() // => 1
```
