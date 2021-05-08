# Android自动化测试初探
Android应用测试与调试实战 (移动开发) by 施懿民 (z-lib.org)

# 基本所有的测试用例都是通过InstrumenationTestRunner执行的

# User scenario testing for Android
https://github.com/jayway/robotium

## android monkey
# 编写monkeyrunner插件

monkeyrunner自带的API功能不是非常强大，所幸的是，它提供了扩展机制允许我们通过插件的方式丰富其API。实际上，因为monkeyrunner是基于Jython的，而Jython又为Python和Java语言之间提供了互操作的桥梁，所以只要遵循Jython中对用在Python里的Java类型的要求就可以了。monkeyrunner插件就是可以通过-plugin参数传入的一个普通的jar包：

$ monkeyrunner -plugin plugin.jar script.py 
