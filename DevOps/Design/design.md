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
