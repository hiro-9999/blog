JavaScript RegExp an example based guide by Sundeep Agarwal (z-lib.org).pdf

# online regexp
https://regex101.com/r/HSeO0z/1


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

// same as: /ear|ar/g
> 'far feat flare fear'.replace(/e?ar/g, 'X') 
< "fX feat flXe fX"

// same as: /\bpar(t|)\b/g
> 'par spare part party'.replace(/\bpart?\b/g, 'X')
< "X spare X party"


// same as: /\b(re.d|red)\b/
> ['red', 'ready', 're;d', 'redo', 'reed'].filter(w => /\bre.?d\b/.test(w)) 
< ["red", "re;d", "reed"]

// same as: /part|parrot|parent/g
> 'par part parrot parent'.replace(/par(en|ro)?t/g, 'X') 
< "par X X X"

// match 't' followed by zero or more of 'a' followed by 'r'
> 'tr tear tare steer sitaara'.replace(/ta*r/g, 'X') 
< "X tear Xe steer siXa"

// match 't' followed by zero or more of 'e' or 'a' followed by 'r'
> 'tr tear tare steer sitaara'.replace(/t(e|a)*r/g, 'X') 
< "X X Xe sX siXa"

// match zero or more of '1' followed by '2' 
> '3111111111125111142'.replace(/1*2/g, 'X') 
< "3X511114X"

// last element is empty because there is nothing after '2' at the end of string
> '3111111111125111142'.split(/1*2/) 
< ["3", "511114", ""]
// note how '25' and '42' gets split, there is '1' zero times in between them
> '3111111111125111142'.split(/1*/) 
< ["3", "2", "5", "4", "2"]

Pattern Description
  {m,n} match m to n times 
  {m,} match at least m times 
  {n} match exactly n times

> demo.filter(w => /ab{3,}c/.test(w)) 
< ["xabbbcz", "abbbbbc"]

// sentence = 'that is quite a fabricated tale'
// t.*?a will always match from first 't' to first 'a' 
> sentence.replace(/t.*?a/, 'X')
< "Xt is quite a fabricated tale"

Use s flag to allow . metacharacter to match \r and \n characters as well.
// by default, the . metacharacter doesn't match newline
> 'Hi there\nHave a Nice Day'.replace(/the.*ice/, 'X') < "Hi there
Have a Nice Day"
// 's' flag will allow newline character to be matched as well > 'Hi there\nHave a Nice Day'.replace(/the.*ice/s, 'X')
< "Hi X Day"
```


