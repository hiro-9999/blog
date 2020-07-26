https://dartpad.dartlang.org

Quick Start Guide to Dart Programming Create High-Performance Applications for the Web and Mobile by Sanjib Sinha (z-lib.org).pdf


 ARM and X86 processors; the ARM processors follow a Reduced Instruction
Set Computer (RISC) architecture, while x86 processors are Complex Instruction Set Architecture (CISC). 

```
Dart is strongly typed language

 Numbers
• Strings
• Booleans
• Lists (also known as arrays)
• Sets
• Maps
• Runes (for expressing Unicode characters in a string)
• Symbols

You can add some print statements to see the recursion in action.
int getRecurse(int num)
{
if (num > 1) {
print("In getRecurse and num is $num"); return num * getRecurse(num - 1);
  }  else return 1;
}

```
# recursion 递归


compile-time constant, use const; use final for an instance variable that you will never change.


# Dart is an object-oriented language, which means it has classes and objects.

# mixins
mixins by reusing the Dog class’s code. Look at this line:
class Cat extends Animal with Dog {...}

## support for mixins was introduced in dart 2.1

In a nutshell, data structures help you to organize information for storage and later retrieval
# 简而言之，数据结构可帮助您组织信息以进行存储和以后的检索

asynchronous programming by using a feature called Future. In Dart SDK version 1.9
