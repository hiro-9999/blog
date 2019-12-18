React 是一个用于构建用户界面的 JAVASCRIPT 库。
React 主要用于构建UI
JSX − JSX 是 JavaScript 语法的扩展。
.单向响应的数据流 − React 实现了单向响应的数据流
https://www.runoob.com

// this is good to read
https://www.runoob.com/react/react-install.html
内容就是要在渲染目标中显示的东西，可以是一个 React 部件，也可以是一段HTML或TEXT文本。渲染目标JS对象，就是一个DIV或TABEL,或TD 等HTML的节点对象。

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
