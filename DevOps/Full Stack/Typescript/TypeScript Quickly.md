TypeScript Quickly by YAKOV FAIN, ANTON MOISEEV (z-lib.org).pdf

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
