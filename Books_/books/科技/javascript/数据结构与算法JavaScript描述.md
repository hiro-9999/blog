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
append:给列表添加元素 ........................................................................................... 35 3.2.2 
remove:从列表中删除元素 ....................................................................................... 35 3.2.3 
find:在列表中查找某一元素..................................................................................... 35 3.2.4 
length:列表中有多少个元素 ................................................................................... 36 3.2.5 
toString:显示列表中的元素 ................................................................................... 36 3.2.6 
insert:向列表中插入一个元素 ............................................................................... 37 3.2.7 
clear:清空列表中所有的元素 ................................................................................. 37 3.2.8
contains:判断给定值是否在列表中 ....................................................................... 37 3.2.9 


# 栈

# 队列

# 字典

# 散列

# 集合

# 二叉树和二叉查找树

# 图和图算法

# 排序算法

# 检索算法

# 高级算法
