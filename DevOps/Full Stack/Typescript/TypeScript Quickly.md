TypeScript Quickly by YAKOV FAIN, ANTON MOISEEV (z-lib.org).pdf

# react
https://zh-hans.reactjs.org

```
enum Direction {
    Up = "UP",
    Down = "DOWN",
    Left = "LEFT",
    Right = "RIGHT",
}

@media (max-width: 640px) media query instructs the browser to change the lay- out on small devices (less than 640 pixels in width). 

Here’s how you can calculate the SHA-256 hash for the text “hello world” on macOS:
echo -n 'hello world' | shasum -a 256

```
# crypto object to support cryptography
https://developer.mozilla.org/en-US/docs/Web/API/SubtleCrypto/digest

# tsc greeter.ts --sourceMap true --inlineSources true
It still produces the greeter.js and greeter.js.map files, but the latter now also includes the code from greeter.ts. This option eliminates the need to deploy separate .ts files under your web server, but you can still debug the TypeScript code.

# typescript Playground
http://mng.bz/MOpB

### useCallback
https://reactjs.org/docs/hooks-reference.html#usecallback
```
これをuseMemoを利用して書き直してみましょう。

const Foo = ({timestamp}) => {

  const dateString = useMemo(()=>{
    const dateObj = new Date(timestamp)
    return `${dateObj.getFullYear()}年${dateObj.getMonth() + 1}月${dateObj.getDate()}日`
  },[timestamp])

  return (
    <p>日付：{dateString}</p>
  )
}
useMemo内で日付文字列を生成するように変更しましたので、日付文字列を生成する処理は初回もしくはtimestampが変更された際にしか実行されなくなります。

const MyComponent = () => {
  // コールバック関数
  const handleInput= useCallback((e) => {
    // イベント発生時に実行したい処理
    console.log(e.target.value)
  },[])
 
  return (
    <div>
      <input type="button" defaultValue=""　onClick={handleInput}/>
    </div>
  )
}
コールバック関数を作成する場合には極力useCallbackを利用するのがよいでしょう。

function App() {
  
  const inputEl = useRef(null)
  const [text,changeText] = useState("")
  const handleClick = useCallback(()=>{
    changeText(inputEl.current.value)
  },[])

  return (
    <>
      <p>text : {text}</p>
      <input ref={inputEl} type="text" />
      <button onClick={handleClick}>set text</button>
    </>
  )
}
```

GitHub at https:// github.com/yfain/getts

# vscode
https://code.visualstudio.com/docs/languages/typescript

```rub
const outerFunc = (someValue: number) =>
    (multiplier: number) => someValue * multiplier;
Declares the higher- order function
const innerFunc = outerFunc(10);
let result = innerFunc(5);
innerFunc is a closure that knows that someValue = 10.
console.log(result);
Invokes the returned function This will print 50.

import React, { useState, useEffect, ChangeEvent } from 'react';
const baseUrl = 'http://api.openweathermap.org/data/2.5/weather?q='; const suffix = "&units=imperial&appid=12345";
const App: React.FC = () => {
 const [city, setCity] = useState('London');
Asynchronously fetches weather data for the specified city
}
Updates the state
const getWeather = async (city: string) => {
const response = await fetch(baseUrl + city + suffix); const jsonWeather = await response.json(); console.log(jsonWeather);
}
useEffect( { () => getWeather(city) }, []);
An empty array means run this hook once.
const handleChange = (event: ChangeEvent<HTMLInputElement>) => { setCity( event.target.value );
return (
  <div>
  <form>
    <input type="text" placeholder="Enter city"
           onInput = {handleChange} />
    <button type="submit">Get Weather</button>
    <h2>City: {city}</h2>
  </form>
</div>
); }
export default App;

```
# hook
https://reactjs.org/docs/hooks-reference.html#usecallback
