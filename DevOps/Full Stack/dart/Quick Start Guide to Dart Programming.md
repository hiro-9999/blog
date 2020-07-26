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



