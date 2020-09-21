# useContext()：共享状态钩子
http://www.ruanyifeng.com/blog/2019/09/react-hooks.html

# useState()：状态钩子
useState()用于为函数组件引入状态（state）。纯函数不能有状态，所以把状态放在钩子里面。

如果需要在组件之间共享状态，可以使用useContext()。
现在有两个组件 Navbar 和 Messages，我们希望它们之间共享状态。

<div className="App">
  <Navbar/>
  <Messages/>
</div>
第一步就是使用 React Context API，在组件外部建立一个 Context。

## const AppContext = React.createContext({});
组件封装代码如下。
```
<AppContext.Provider value={{
  username: 'superawesome'
}}>
  <div className="App">
    <Navbar/>
    <Messages/>
  </div>
</AppContext.Provider>
上面代码中，AppContext.Provider提供了一个 Context 对象，这个对象可以被子组件共享。
Navbar 组件的代码如下。

const Navbar = () => {
  const { username } = useContext(AppContext);
  return (
    <div className="navbar">
      <p>AwesomeSite</p>
      <p>{username}</p>
    </div>
  );
}
上面代码中，useContext()钩子函数用来引入 Context 对象，从中获取username属性。
Message 组件的代码也类似。

const Messages = () => {
  const { username } = useContext(AppContext)

  return (
    <div className="messages">
      <h1>Messages</h1>
      <p>1 message for {username}</p>
      <p className="message">useContext is awesome!</p>
    </div>
  )
}
```

# useReducer()：action 钩子
React 本身不提供状态管理功能，通常需要使用外部库。这方面最常用的库是 Redux。
Redux 的核心概念是，组件发出 action 与状态管理器通信。状态管理器收到 action 以后，使用 Reducer 函数算出新的状态，Reducer 函数的形式是(state, action) => newState。
useReducers()钩子用来引入 Reducer 功能。
