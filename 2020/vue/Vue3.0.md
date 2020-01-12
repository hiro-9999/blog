VUE的基础语法

new Vue(options)

返回值vm（viewModel）
el：不能挂载到html或者body上 =>querySelector
data
数据值对于对象来说要先声明，否则新增属性无效（可以基于vm.$set处理）
vm.arr[0]=xxx 改变数组中的某一项视图不会渲染，需要基于内置的方法，例如：push...
对象或者数组可以整体替换值实现数据变视图也变
...
mustache（[ˈmʌstæʃ]） 小胡子语法

value
JS表达式
常用的指令（directive）

v-model
v-html / v-text：取消小胡子语法刷新中的闪烁问题
v-bind（缩写 :）
v-once
v-if 和 v-show
v-for
for in循环 & for of循环
遍历数据类型的范围
原型上方法遍历（或者数组新增的xxx:xxx属性遍历）
......
Symbol.iteratoer：Array、Set、Map、String、Arguments、NodeList...
v-on 事件绑定
v-on:xxx
methods ：和data类似，都会把方法挂载到vm实例上（this都是当前实例）
@xxx
@xxx="func" & @xxx="func($event,...)"
directive自定义指令

Vue.directive([指令名，省略v-], function(el,bindings,vnode){}
el当前元素
bindings包含很多信息
name：指令名，不包括 v- 前缀
value：指令的绑定值
oldValue：指令绑定的前一个值，仅在 update 和 componentUpdated 钩子中可用
expression：字符串形式的指令表达式
arg：传给指令的参数，可选。例如 v-my-directive:foo 中，参数为 "foo"
modifiers：包含修饰符的对象。例如：my-directive.foo.bar 中，修饰符对象 { foo: true, bar: true }
vnode虚拟DOM
ctx = vnode.context 获取当前元素所在的上下文
ctx[bindings.expression]=xxx 获取上下文中的表达式变量，并且把指定的值赋值给它
钩子函数
bind：当用户绑定指令时生效（只调一次）
update：所在组件的 VNode 更新时调用，但是可能发生在其子 VNode 更新之前（一个函数的方式就是把bind和update合在一起的写法）
componentUpdated：指令所在组件的 VNode 及其子 VNode 全部更新后调用
unbind：只调用一次，指令与元素解绑时调用
inserted：被绑定元素插入父节点时调用 (仅保证父节点存在，但不一定已被插入文档中)
小练习：创建一个自定义指令控制文本框的校验
事件修饰符

常规：.stop / .prevent / .once ...
按键：.enter 或者 .13 / .up / .down / .left / .right ...
组合修饰符
...
表单元素的处理

普通文本框 或者 文本域
单选框
复选框
下拉框
小案例：全选和非全选
计算属性、过滤器、监听器

methods 普通方法
filters 过滤器
只能应用到胡子语法和v-bind中
小练习：输入内容的单词首字母大写
computed
getter & setter
相对于普通方法来讲，计算属性是基于它们的响应式依赖进行缓存的
依赖data中的数据变量
小练习：输入内容的单词首字母大写
小练习：全选和非全选
watch
当需要在数据变化时执行异步或开销较大的操作时应用监听器
小练习：全选和非全选
小练习：数据异步绑定的处理

class和style绑定

class的处理（对象语法、数组语法）
内联样式的处理
...
生命周期函数（钩子函数）

beforeCreate
created
beforeMount
mounted
beforeUpdate
updated
beforeDestory
destory
...
常用的属性方法

$set : 设置响应式数据
$el : 挂载的元素
$destroy : 销毁vue的实例；同时调用beforeDestroy destroyed
$mount : 挂载真实DOM的方法
$data : 响应式的对象
$options: 是Vue的构造函数的参数
$refs : 可以用来获取指定的元素对象 （非受控组件）
$on : 订阅
$emit : 发布
$watch：监控
...
https://www.toutiao.com/a6753790071788274189/

https://www.toutiao.com/a6748676005734384131/

https://www.toutiao.com/a6774611883006624269/
