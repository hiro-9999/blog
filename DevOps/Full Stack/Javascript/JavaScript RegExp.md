JavaScript RegExp an example based guide by Sundeep Agarwal (z-lib.org).pdf

# online regexp
https://regex101.com/r/HSeO0z/1

# sample
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


// all non-digits
> 'Sample123string42with777numbers'.match(/[^0-9]+/g) < ["Sample", "string", "with", "numbers"]

// deleting characters from start of string based on a delimiter
> 'foo=42; baz=123'.replace(/^[^=]+/, '') # 前面开始到不是=为止
< "=42; baz=123"

> 'foo:123:bar:baz'.replace(/^([^:]+:){2}/, '')
< "bar:baz"

// deleting characters at end of string based on a delimiter
> 'foo=42; baz=123'.replace(/=[^=]+$/, '') 
< "foo=42; baz"

• \w is similar to [A-Za-z0-9_] for matching word characters (recall the definition for word boundaries)
• \d is similar to   for matching digit characters
• \s is similar to   for matching whitespace characters


// remove square brackets that surround digit characters
> '[52] apples and [31] mangoes'.replace(/\[(\d+)\]/g, '$1') 
< "52 apples and 31 mangoes"
// replace __ with _ and delete _ if it is alone
> '_foo_ __123__ _baz_'.replace(/(_)?_/g, '$1') < "foo _123_ baz"
// swap words that are separated by a comma
> 'good,bad 42,24'.replace(/(\w+),(\w+)/g, '$2,$1') < "bad,good 24,42"



Backreference gives matched portion of Nth capture group
use $1 , $2 , $3 , etc in replacement section
$& gives entire matched portion
$` gives string before the matched portion $' gives string after the matched portion
use \1 , \2 , \3 , etc within regexp definition $$ insert $ literally in replacement section


same as $N , allows to separate backreference and other digits allows to separate backreference and digits in regexp definition
non-capturing group
named capture group
use   for backreferencing in regexp definition use   for backreferencing in replacement section named captures are also accessible via groups property


// overlap example
// 'foot' doesn't match because it is preceded by '_'
// the '_' before 'foot' was considered even though it got replaced > 'food _fool 42foo_foot'.replace(/(?<!_)foo./g, 'baz')
< "baz _fool 42bazfoot"

```

# • regex101 — visual aid and online testing tool for regular expressions, select flavor as JavaScript before use
https://regex101.com/r/HSeO0z/1

# • stackoverflow: regex FAQ
https://stackoverflow.com/questions/22937618/reference-what-does-this-regex-mean

# • regulex — for visualization of regexp as rail road diagrams
https://jex.im/regulex/#!flags=&re=%5E(a%7Cb)*%3F%24

## • XRegExp — utility with features like metacharacter escaping, recursive matching, etc
https://github.com/slevithan/xregexp

# • CommonRegexJS — collection of common regular expressions
https://github.com/talyssonoc/CommonRegexJS

# • randexp.js — Generate strings that match a given regular expression
https://github.com/fent/randexp.js

# • stackoverflow: JavaScript regexp find [javascript] [regex]
https://stackoverflow.com/questions/tagged/javascript+regex?sort=votes&pageSize=15




## ∘ stackoverflow: regex tag is a good source of exercise questions
https://stackoverflow.com/questions/tagged/regex

## • rexegg — tutorials, tricks and more
https://www.rexegg.com

• regexcrossword — tutorials and puzzles
• swtch — stuff about regular expression implementation engines
https://swtch.com/~rsc/regexp/regexp1.html

# • news.ycombinator: collection of regexp related resources
https://news.ycombinator.com/item?id=20614847

Here’s some links for specific topics:
• rexegg: best regex trick

• regular-expressions: matching numeric ranges
• regular-expressions: Zero-Length Matches
• stackoverflow: Greedy vs Reluctant vs Possessive Quantifiers
• cloudflare: Details of the Cloudflare outage on July 2, 2019 — see appendix for details
about CPU exhaustion caused due to regular expression backtracking


