React 是一个用于构建用户界面的 JAVASCRIPT 库。
React 主要用于构建UI
JSX − JSX 是 JavaScript 语法的扩展。
.单向响应的数据流 − React 实现了单向响应的数据流
https://www.runoob.com

//webpack ->good
https://www.bilibili.com/video/av75396447?from=search&seid=610077362255644899

// this is good to read
https://www.runoob.com/react/react-install.html
内容就是要在渲染目标中显示的东西，可以是一个 React 部件，也可以是一段HTML或TEXT文本。渲染目标JS对象，就是一个DIV或TABEL,或TD 等HTML的节点对象。

在 JSX 中不能使用 if else 语句，但可以使用 conditional (三元运算) 表达式来替代。

而自定义的 React 类名以大写字母开头

在添加属性时， class 属性需要写成 className ，for 属性需要写成 htmlFor 

React State(状态)
React 把组件看成是一个状态机（State Machines）。
https://www.runoob.com/try/try.php?filename=try_react_state

state 和 props 主要的区别在于 props 是不可变的，而 state 可以根据与用户交互来改变。这就是为什么有些容器组件需要定义 state 来更新和修改数据。 而子组件只能通过 props 来传递数据。

如果采用 JSX 的语法你需要传入一个函数作为事件处理函数，而不是一个字符串(DOM 元素的写法)
this.handleClick = this.handleClick.bind(this);

因此，如果条件是 true，&& 右侧的元素就会被渲染，如果是 false，React 会忽略并跳过它。

ReactDOM.render(<App />, div);
unmountComponentAtNode() 这个方法是解除渲染挂载，作用和 render 刚好相反，也就清空一个渲染目标中的 React 部件或 html 内容。

ReactDOM.unmountComponentAtNode(div);

// this is good to watch
https://www.bilibili.com/video/av51174155?p=12


React 组件生命周期
https://www.runoob.com/react/react-component-life-cycle.html

组件的生命周期可分成三个状态：
Mounting：已插入真实 DOM
Updating：正在被重新渲染
Unmounting：已移出真实 DOM

生命周期的方法有：
componentWillMount 在渲染前调用,在客户端也在服务端。
componentDidMount : 在第一次渲染后调用，只在客户端。之后组件已经生成了对应的DOM结构，可以通过this.getDOMNode()来进行访问。 如果你想和其他JavaScript框架一起使用，可以在这个方法中调用setTimeout, setInterval或者发送AJAX请求等操作(防止异步操作阻塞UI)。
componentWillReceiveProps 在组件接收到一个新的 prop (更新后)时被调用。这个方法在初始化render时不会被调用。
shouldComponentUpdate 返回一个布尔值。在组件接收到新的props或者state时被调用。在初始化时或者使用forceUpdate时不被调用。 
可以在你确认不需要更新组件时使用。
componentWillUpdate在组件接收到新的props或者state但还没有render时被调用。在初始化时不会被调用。
componentDidUpdate 在组件完成更新后立即调用。在初始化时不会被调用。
componentWillUnmount在组件从 DOM 中移除之前立刻被调用。

React 组件 API。我们将讲解以下7个方法:

设置状态：setState
替换状态：replaceState
设置属性：setProps
替换属性：replaceProps
强制更新：forceUpdate
获取DOM节点：findDOMNode
判断组件挂载状态：isMounted
