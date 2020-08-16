数据结构与算法JavaScript描述.pdf

# 数组
 JavaScript: The Definitive Guide 和 JavaScript: The Good Parts
 
### indexOf() 函数是最常用的存取函数之一，用来查找传进来的参数在目标数组中是否存在。 如果目标数组包含该参数，就返回该元素在数组中的索引;如果不包含，就返回 -1
 
 2.3.2 数组的字符串表示
### 有两个方法可以将数组转化为字符串:join() 和 toString()。这两个方法都返回一个包含
数组所有元素的字符串，各元素之间用逗号分隔开。下面是一些例子:
var names = ["David", "Cynthia", "Raymond", "Clayton", "Mike", "Jennifer"]; var namestr = names.join();
print(namestr); // David,Cynthia,Raymond,Clayton,Mike,Jennifer
namestr = names.toString();
print(namestr); // David,Cynthia,Raymond,Clayton,Mike,Jennifer 事实上，当直接对一个数组使用 print() 函数时，系统会自动调用那个数组的 toString()
方法:
     print(names); // David,Cynthia,Raymond,Clayton,Mike,Jennifer
     
### concat 方法可以合并多个数组
创建一个新数组，

### splice() 方法截取一个数组的子集创建一个新数组。

```
var itDiv = ["Mike","Clayton","Terrill","Raymond","Cynthia","Danny","Jennifer"]; var dmpDept = itDiv.splice(3,3);
var cisDept = itDiv;
print(dmpDept); // Raymond,Cynthia,Danny
print(cisDept); // Mike,Clayton,Terrill,Jennifer

使用 splice() 方法为数组添加元素，需提供如下参数:
• 起始索引(也就是你希望开始添加元素的地方);
• 需要删除的元素个数(添加元素时该参数设为 0); • 想要添加进数组的元素。
看一个简单的例子。下面的程序在数组中间插入元素:
var nums = [1,2,3,7,8,9];
var newElements = [4,5,6]; nums.splice(3,0,newElements); print(nums); // 1,2,3,4,5,6,7,8,9
要插入数组的元素不必组织成一个数组，它可以是任意的元素序列，比如:
var nums = [1,2,3,7,8,9]; nums.splice(3,0,4,5,6); print(nums);
在上面的例子中，参数 4、5、6 就是我们想插入数组 nums 的元素序列。

下面是使用 splice() 方法从数组中删除元素的例子:
var nums = [1,2,3,100,200,300,400,4,5]; nums.splice(3,4);
print(nums); // 1,2,3,4,5

```
### reverse()，该方法将数组中元素的顺序进行翻转。
如果元素是字符串类型，那么数组的可变方法 sort() 就非常好使:
var names = ["David","Mike","Cynthia","Clayton","Bryan","Raymond"]; names.sort();
print(names); // Bryan,Clayton,Cynthia,David,Mike,Raymond

```
传入一个大小比较函数，再来看看前面的例子:
function compare(num1, num2) { return num1 - num2;
}
var nums = [3,1,2,100,4,200]; nums.sort(compare); print(nums); // 1,2,3,4,100,200
sort() 函数使用了 compare() 函数对数组按照数字大小进行排序，而不是按照字典顺序。
```
### replace
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/splice
## unshift() 方法可以将元素添加在数组的开头，下述代码展示了该方法的用法:
## shift() 方法可以删除数组的第一个元素，下述代码展示了该方法的用法:


# 迭代器方法
```
第一个方法是 forEach()，该方法接受一个函数作为参数，对数组中的每个元素 使用该函数。下面这个例子展示了如何使用该方法:
     function square(num) {
        print(num, num * num);
}
var nums = [1,2,3,4,5,6,7,8,9,10]; nums.forEach(square);

     function add(runningTotal, currentValue) {
        return runningTotal + currentValue;
}
var nums = [1,2,3,4,5,6,7,8,9,10]; var sum = nums.reduce(add); print(sum); // 显示 55

```

# 列表
```
listSize(属性) pos(属性) length(属性) clear(方法) toString(方法) getElement(方法) insert(方法) append(方法) remove(方法) front(方法) end(方法) prev(方法) next(方法) currPos(方法) moveTo(方法)
列表的元素个数
列表的当前位置 返回列表中元素的个数 清空列表中的所有元素 返回列表的字符串形式 返回当前位置的元素 在现有元素后插入新元素 在列表的末尾添加新元素 从列表中删除元素 将列表的当前位置设移动到第一个元素 将列表的当前位置移动到最后一个元素 将当前位置后移一位 将当前位置前移一位 返回列表的当前位置 将当前位置移动到指定位置
 
```
append:给列表添加元素 ........................................................................................... 35 3.2.2 
remove:从列表中删除元素 ....................................................................................... 35 3.2.3 
find:在列表中查找某一元素..................................................................................... 35 3.2.4 
length:列表中有多少个元素 ................................................................................... 36 3.2.5 
toString:显示列表中的元素 ................................................................................... 36 3.2.6 
insert:向列表中插入一个元素 ............................................................................... 37 3.2.7 
clear:清空列表中所有的元素 ................................................................................. 37 3.2.8
contains:判断给定值是否在列表中 ....................................................................... 37 3.2.9 


# 栈
栈是一种高 效的数据结构，因为数据只能在栈顶添加或删除，所以这样的操作很快，而且容易实现。 栈的使用遍布程序语言实现的方方面面，从表达式求值到处理函数调用。

### 栈被称为一种后入先出(LIFO，last-in-first-out)的数据结构。 new Stack()
```
将数字转换为二进制和八进制
     function mulBase(num, base) {
        var s = new Stack();
        do {
s.push(num % base);
num = Math.floor(num /= base); } while (num > 0);
var converted = "";
while (s.length() > 0) {
converted += s.pop(); }
        return converted;
     }
var num = 32;
   此算法只针对基数为 2~9 的情况。
  栈 | 49
var base = 2;
var newNum = mulBase(num, base);
print(num + " converted to base " + base + " is " + newNum); num = 125;
base = 8;
var newNum = mulBase(num, base);
print(num + " converted to base " + base + " is " + newNum);
输出为:
     32 converted to base 2 is 100000
     125 converted to base 8 is 175
```

# 队列
队列是一种先进先出(First-In-First-Out，FIFO)的数据结构
```
names = [];
name.push("Cynthia"); names.push("Jennifer");
print(names); // 显示 Cynthia,Jennifer
然后使用 shift() 方法删除数组的第一个元素: names.shift();
print(names); // 显示 Jennifer
```

# 链表
```
function Node(element) { 
this.element = element; 
this.next = null;
}
function LList() {
this.head = new Node("head"); 
this.find = find;
this.insert = insert; 
this.remove = remove; 
this.display = display;
}

function insert(newElement, item) { 
var newNode = new Node(newElement); 
var current = this.find(item); 
newNode.next = current.next; //新node next指向 指向-》 原来的node指向 * is ok
current.next = newNode;//现在node next 指向-》 新node
}

function LList() {
this.head = new Node("head");
this.find = find; this.insert = insert; //this.remove = remove; this.display = display;
}
function find(item) {
var currNode = this.head;
while (currNode.element != item) {
currNode = currNode.next; }
        return currNode;
     }
function insert(newElement, item) { var newNode = new Node(newElement); var current = this.find(item); newNode.next = current.next; current.next = newNode;
}
function display() {
var currNode = this.head;
while (!(currNode.next == null)) {
print(currNode.next.element);
currNode = currNode.next; }
}
// 主程序
var cities = new LList(); cities.insert("Conway", "head"); cities.insert("Russellville", "Conway"); cities.insert("Alma", "Russellville"); cities.display()
输出为:
     Conway
     Russellville
     Alma
```

```

function remove(item) {
var prevNode = this.findPrevious(item); 
if (!(prevNode.next == null)) {
prevNode.next = prevNode.next.next; }
}

```
# 双向链表
```
remove() 方法的定义如下:
function remove(item) {
var currNode = this.find(item); if (!(currNode.next == null)) {
currNode.previous.next = currNode.next; currNode.next.previous = currNode.previous; currNode.next = null;
currNode.previous = null;
} }
```
# 循环链表
循环链表和单向链表相似，节点类型都是一样的。唯一的区别是，在创建循环链表时，让
其头节点的 next 属性指向它本身，即: head.next = head
```
创建循环链表，只需要修改 LList 类的构造函数:
function LList() {
this.head = new Node("head"); this.head.next = this.head; this.find = find;
this.insert = insert; this.display = display; this.findPrevious = findPrevious; this.remove = remove;
}
```

首当其冲的是要为 Node 类增加一个 previous 属性:
function Node(element) { this.element = element; this.next = null; this.previous = null;
}
# 字典
## JavaScript 中 一切皆对象，数组也是对象。
```
load("Dictionary.js");
var pbook = new Dictionary(); 
pbook.add("Mike","123");
pbook.add("David", "345");
pbook.add("Cynthia", "456");
print("David's extension: " + pbook.find("David")); pbook.remove("David");
pbook.showAll();
输出为:
David's extension: 345 Mike -> 123
Cynthia -> 456

```
# 散列
## HashTable类
#### 开链法
实现开链法的方法是:在创建存储散列过的键值的数组时，通过调用一个函数创建一个新 的空数组，然后将该数组赋给散列表里的每个数组元素。这样就创建了一个二维数组(请 参考第 3 章内容，以了解什么是二维数组)。
```
function buildChains() {
for (var i = 0; i < this.table.length; ++i) {
this.table[i] = new Array(); }
}

load("HashTable.js");
var hTable = new HashTable();
hTable.buildChains();
var someNames = ["David", "Jennifer", "Donnie", "Raymond",
"Cynthia", "Mike", "Clayton", "Danny", "Jonathan"]; for (var i = 0; i < someNames.length; ++i) {
hTable.put(someNames[i]); }
hTable.showDistro();

```
# 集合
集合(set)是一种包含不同元素的数据结构。
定义 union()、subset() 和 difference() 方法会更有意思。union() 方法执行并集操作，将 两个集合合并成一个。
最后一个操作是 difference()，该方法返回一个新集合，该集合包含的是那些属于第一个
function difference(set) {
var tempSet = new Set();
for (var i = 0; i < this.dataStore.length; ++i) {
if (!set.contains(this.dataStore[i])) { tempSet.add(this.dataStore[i]);
} }
        return tempSet;
     }
集合但不属于第二个集合的成员。
```
load("set.js");
var names = new Set(); names.add("David"); names.add("Jennifer"); names.add("Cynthia"); names.add("Mike"); names.add("Raymond");
if (names.add("Mike")) {
print("Mike added") }
else {
print("Can't add Mike, must already be in set");
}
print(names.show());
var removed = "Mike";
if (names.remove(removed)) {
print(removed + " removed."); }
else {
print(removed + " not removed.");
}
names.add("Clayton"); print(names.show()); removed = "Alisa";
if (names.remove("Mike")) {
print(removed + " removed."); }
else {
print(removed + " not removed.");
}
```
# 二叉树和二叉查找树
## 二叉树是一种特殊的树，它的子节点个数不超过两个。二叉树具有一些特殊的计算性质，
使得在它们之上的一些操作异常高效。后续章节将深入讨论二叉树。
```
function Node(data, left, right) { this.data = data;
this.left = left;
this.right = right;
this.show = show; }
function show() { return this.data;
}
```

# 图和图算法

# 排序算法

# 检索算法

# 高级算法
