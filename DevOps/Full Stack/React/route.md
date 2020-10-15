
https://stackoverflow.com/questions/55130393/component-is-not-getting-rendered-after-history-push

```
1) Use import { Router} from 'react-router-dom' rather than import { BrowserRouter as Router} from 'react-router-dom'

2) Create variable history in a different file namely (can be changed) ../src/services/history.js and the content should be :

import { createBrowserHistory } from 'history';
const history = createBrowserHistory();
export default history;
You would have to install the react-history package by npm install --save react-history

3) Import history into main file and pass that inside the Router component.

import React from 'react';
import { Router, Route, Switch } from 'react-router-dom'
import history from './services/history'


class App extends React.Component {

    render() {
        return (
            <Router history={history}>
                <Switch>
                    <Route exact path='/' component={MainPage}></Route>
                    <Route exact path='/vendor' component={VendorPage}></Route>
                    <Route exact path='/client' component={ClientPage}></Route>
                </Switch>
            </Router>
        );
    }
}

export default App;
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
