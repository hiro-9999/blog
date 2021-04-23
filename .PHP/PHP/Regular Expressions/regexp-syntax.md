https://www.runoob.com/regexp/regexp-syntax.html

	
# 匹配所有。\s 是匹配所有空白符，包括换行，\S 非空白符，不包括换行。

	
# 匹配字母、数字、下划线。等价于 [A-Za-z0-9_]

	
# [^ABC] 匹配除了 [...] 中字符的所有字符，例如 [^aeiou] 匹配字符串 "google runoob taobao" 中除了 e o u a 字母的所有字母。

# 通过在 *、+ 或 ? 限定符之后放置 ?，该表达式从"贪婪"表达式转换为"非贪婪"表达式或者最小匹配。
```js
\d	
匹配一个数字字符。等价于 [0-9]。

\w	
匹配字母、数字、下划线。等价于'[A-Za-z0-9_]'。

\W	
匹配非字母、数字、下划线。等价于 '[^A-Za-z0-9_]'。

\b	
匹配一个单词边界，也就是指单词和空格间的位置。例如， 'er\b' 可以匹配"never" 中的 'er'，但不能匹配 "verb" 中的 'er'。
```

https://www.runoob.com/try/try.php?filename=tryjsref_regexp-metachar
