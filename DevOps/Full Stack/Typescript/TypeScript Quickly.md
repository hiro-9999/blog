TypeScript Quickly by YAKOV FAIN, ANTON MOISEEV (z-lib.org).pdf

GitHub at https:// github.com/yfain/getts

# vscode
https://code.visualstudio.com/docs/languages/typescript

```
const outerFunc = (someValue: number) =>
    (multiplier: number) => someValue * multiplier;
Declares the higher- order function
const innerFunc = outerFunc(10);
let result = innerFunc(5);
innerFunc is a closure that knows that someValue = 10.
console.log(result);
Invokes the returned function This will print 50.
```
