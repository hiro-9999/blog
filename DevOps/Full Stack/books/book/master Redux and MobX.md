The state itself can be differentiated into local state and sophisticated state. 
The management of this state is called local state management and sophisticated state management.


Taming the State in React. Your journey to master Redux and MobX by Robin Wieruch (z-lib.org).pdf


# local state.
this.state
this.setState()


# way every component that needs to be styled according to the colored theme could get the necessary
  information from React’s context object. 
  C.contextTypes = { coloredTheme: PropTypes.string
};
## local storage prsist
While the local storage keeps the data even when the browser is closed,
https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage

## session storage
the session storage expires once the browser closes. Both storages work the same by using key value pairs.
https://developer.mozilla.org/en-US/docs/Web/API/Window/sessionStorage

# View -> Action -> Reducer(s) -> Store -> View
