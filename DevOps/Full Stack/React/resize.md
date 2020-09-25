```
import React, { useEffect, useState } from "react";

let App = () => {
  const [windowWidth, setWindowWidth] = useState(0);
  const [windowHeight, setWindowHeight] = useState(0);
  let resizeWindow = () => {
    setWindowWidth(window.innerWidth);
    setWindowHeight(window.innerHeight);
  };

  useEffect(() => {
    resizeWindow();
    window.addEventListener("resize", resizeWindow);
    return () => window.removeEventListener("resize", resizeWindow);
  }, []);

  return (
    <div>
      <span>
        {windowWidth} x {windowHeight}
      </span>
    </div>
  );
};
```
https://stackoverflow.com/questions/19014250/rerender-view-on-browser-resize-with-react?rq=1
