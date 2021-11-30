## The Road to React by Robin Wieruch (z-lib.org).pdf
https://leanpub.com/bookstore?category=web_development&type=all#BookstoreTop

### Practical Enterprise React Become an Effective React Developer in Your Team by Devlin Basilan Duldulao, Ruby Jane Leyva Cabagnot (z-lib.org).pdf

# 【M1 Mac】React開発環境の構築
https://omathin.com/react-getstart/

```javascript
In production, it is recommended to minify any JavaScript code that is included with your application. Minification can help your website load several times faster, especially as the size of your JavaScript source code grows.

Here's one way to set it up:

Install Node.js
Run npm init -y in your project folder (don't skip this step!)
Run npm install terser
Now, to minify a file called like_button.js, run in the terminal:

npx terser -c -m -o like_button.min.js -- like_button.js
This will produce a file called like_button.min.js with the minified code in the same directory. If you're typing this often, you can create an npm script to give this command a name.
```

