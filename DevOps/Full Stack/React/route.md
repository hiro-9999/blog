
https://stackoverflow.com/questions/55130393/component-is-not-getting-rendered-after-history-push

```
import React from "react";
import { Router, Route, Switch } from "react-router-dom";
import { createBrowserHistory } from "history";
import Header from "../components/Header";
import Home from "../components/Home";
import About from "../components/About";
import Contact from "../components/Contact";
import ScrollIntoView from "../components/ScrollIntoView";

const history = createBrowserHistory();

export default () => (
  <Router history={history}>
    <div>
      <ScrollIntoView>
        <Header />
        <Switch>
          <Route exact path="/" component={Home} />
          <Route path="/about" component={About} />
          <Route path="/contact" component={Contact} />
        </Switch>
        <Header />
      </ScrollIntoView>
    </div>
  </Router>
);
```




https://reactrouter.com/web/api/Hooks/usehistory
```
import { useHistory,useLocation } from "react-router-dom";
let history = useHistory();

```

https://stackoverflow.com/questions/41911309/how-to-listen-to-route-changes-in-react-router-v4
```
import React from 'react'
import { useHistory } from "react-router-dom";

const ComponentOne = () => {
    const history = useHistory();
    const handleSubmit = () => {
        history.push('/component-two',{params:'Hello World'})
    }
    return (
        <div>
            <button onClick={() => {handleSubmit()}}>Fire</button>
        </div>
    )
}
Component Two:

import React from 'react'
import { useLocation } from "react-router-dom";

const ComponentTwo = () => {
    const location = useLocation();
    const myparam = location.state.params;
    return (
        <div>
            <p>{myparam}</p>
        </div>
    )
}
```
