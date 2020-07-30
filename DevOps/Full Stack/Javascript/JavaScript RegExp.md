JavaScript RegExp an example based guide by Sundeep Agarwal (z-lib.org).pdf

https://github.com/learnbyexample/learn_js_regexp

https://github.com/learnbyexample/learn_js_regexp/blob/master/Exercise_solutions.md

```
g) For the given array, filter all elements that contains either a or w.

> let items = ['goal', 'new', 'user', 'sit', 'eat', 'dinner']

> items.filter(w => /a/.test(w) || /w/.test(w))
< ["goal", "new", "eat"]
h) For the given array, filter all elements that contains both e and n.

> let items = ['goal', 'new', 'user', 'sit', 'eat', 'dinner']

> items.filter(w => /e/.test(w) && /n/.test(w))
< ["new", "dinner"]
i) For the given string, replace 0xA0 with 0x7F and 0xC0 with 0x1F.

> let ip = 'start address: 0xA0, func1 address: 0xC0'

> ip.replace(/0xA0/, '0x7F').replace(/0xC0/, '0x1F')
< "start address: 0x7F, func1 address: 0x1F"
```

# Regular expressions
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions
```
let re = /ab+c/;
Regular expression literals provide compilation of the regular expression when the script is loaded. If the regular expression remains constant, using this can improve performance.

Or calling the constructor function of the RegExp object, as follows:

let re = new RegExp('ab+c');
```
