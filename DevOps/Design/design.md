https://fontawesome.com/?from=io

# react
https://react-bootstrap.github.io/components/navbar/

https://react-bootstrap.github.io/components/dropdowns/

# Get Started with React Navigation 5 in React Native
https://medium.com/@rossbulat/getting-started-with-react-navigation-5-in-react-native-f82676294d2f
```
let focusListener = null;
useEffect(() => {
  focusListener = navigation.addListener('focus', async () => {
     // do something
  });
  
  return (() => {
    if (focusListener.remove !== undefined)
        this.focusListener.remove();
    })
  }, []);
  ```
https://stackoverflow.com/questions/39174887/focusing-div-elements-with-react

# material-ui
https://material-ui.com/ja/

# .focus()
https://medium.com/swlh/react-focus-c6ffd4aa42e5

```
https://stackoverflow.com/questions/41131450/active-link-with-react-router
const Router = () => (
  <BrowserRouter>
    <div>
      <Nav>
        <NavLink exact={true} activeClassName='is-active' to='/'>Home</NavLink>
        <NavLink activeClassName='is-active' to='/about'>About</NavLink>
      </Nav>

      <Match pattern='/' exactly component={Home} />
      <Match pattern='/about' exactly component={About} />
      <Miss component={NoMatch} />
    </div>
  </BrowserRouter>
)
```
