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
## to dispatch in Redux. 
You can dispatch an action to alter the state in the Redux store. You only dispatch when you want to change the state. 

• Who delegates the actions to the reducer?
• Who triggers actions?
• And finally: Where do I get the updated state to glue it to my View?
# It is the Redux store. The store holds one global state object. 
import { createStore } from 'redux';

const store = createStore(reducer);

# concat
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/concat

store.getState();
# How to subscribe (and unsubscribe) to the store in order to listen for updates?
```
const unsubscribe = store.subscribe(() => { console.log(store.getState());
});
// don't forget to unsubscribe eventually
unsubscribe();

function reducer(state, action) {
  switch(action.type) {
    case 'TODO_ADD' : {
      console.log('initial TODO_ADD:');
      return applyAddTodo(state, action);
    }
    case 'TODO_TOGGLE' : {
      console.log('initial applyToggleTodo:');
      return applyToggleTodo(state, action);
    }
    default : return state;
  }
}
function applyAddTodo(state, action) {
  return state.concat(action.todo);
}
function applyToggleTodo(state, action) {
  return state.map(todo =>
    todo.id === action.todo.id
      ? Object.assign({}, todo, { completed: !todo.completed })
      : todo
  );
}
const store = Redux.createStore(reducer, []);
console.log('initial state:');
console.log(store.getState());
const unsubscribe = store.subscribe(() => {
  console.log('store update, current state:');
  console.log(store.getState());
});
store.dispatch({
  type: 'TODO_ADD',
  todo: { id: '0', name: 'learn redux', completed: false },
});

store.dispatch({
  type: 'TODO_ADD',
  todo: { id: '1', name: 'learn mobx', completed: false },
});

store.dispatch({
  type: 'TODO_TOGGLE',
  todo: { id: '0' },
});

const TODO_ADD = 'TODO_ADD';
const TODO_TOGGLE = 'TODO_TOGGLE';

function reducer(state, action) {
  switch(action.type) {
    case TODO_ADD : {
      return applyAddTodo(state, action);
    }
    case TODO_TOGGLE : {
      return applyToggleTodo(state, action);
    }
    default : return state;
  }
}

function applyAddTodo(state, action) {
  const todo = Object.assign({}, action.todo, { completed: false });
  return state.concat(todo);
}

function applyToggleTodo(state, action) {
  return state.map(todo =>
    todo.id === action.todo.id
      ? Object.assign({}, todo, { completed: !todo.completed })
      : todo
  );
}

function doAddTodo(id, name) {
  return {
    type: TODO_ADD,
    todo: { id, name },
  };
}

function doToggleTodo(id) {
  return {
    type: TODO_TOGGLE,
    todo: { id },
  };
}

const store = Redux.createStore(reducer, []);

console.log('initial state:');
console.log(store.getState());

const unsubscribe = store.subscribe(() => {
  console.log('store update, current state:');
  console.log(store.getState());
});

store.dispatch(doAddTodo('0', 'learn redux'));
store.dispatch(doAddTodo('1', 'learn mobx'));
store.dispatch(doToggleTodo('0'));

unsubscribe();

dispatch(), subscribe() and getState() be accessed in a React view layer

function render() { ReactDOM.render(
<TodoApp
todos={store.getState().todoState}
onToggleTodo={id => store.dispatch(doToggleTodo(id))}
/>,
document.getElementById('root') );
}
store.subscribe(render); render();


```

unsubscribe();

# Object.assign()
The Object.assign() method copies all enumerable own properties from one or more source objects to a target object. It returns the target object.
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/assign

# reselect
https://github.com/reduxjs/reselect



• action creators: doSomething
• reducers: applySomething
• selectors: getSomething
• sagas: watchSomething, handleSomething
# View -> (mapDispatchToProps) -> Action -> Reducer(s) -> Store -> (mapStateToProp\ s) -> View

Redux Saga as asynchronous action library to deal with side-effects such as fetching data from a third-party platform.
Command Line: /
npm install --save redux-saga

# yield
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/yield
function* foo(index) {
  while (index < 2) {
     console.log("frist"+index);
    yield index;
    console.log("frist2"+index);
    index++;
    console.log("frist3"+index);
  }
  console.log("frist4"+index);
}

const iterator = foo(0);

console.log(iterator.next().value);
// expected output: 0

console.log(iterator.next().value);
// expected output: 1

console.log(iterator.next().value);
// expected output: 1

