```
int theVariable = 5;
int *pPointer = &theVariable;
pPointer = 0x00007ffeefbffda8  // a Pointer 是个地址

 *pPointer = 5 // point 指向一个数值
 
   unsigned short int myAge = 5, yourAge = 10;
    unsigned short int *pAge = &myAge; // a pointer
    
    pAge = &myAge; 

    pAge = &yourAge; // reassign the pointer

```


“The Stack and the Heap
```
Programmers generally deal with five areas of memory:
 Global name space
 The heap //堆 data...
 Registers
 Code space
 The stack” //栈 address
 
 “*pPointer = 72;

This means “put 72 at the value in pPointer” or “assign the value 72 to the area on the heap to which pPointer points.”
If new cannot create memory on the heap—because memory is a limited resource—it throws an exception. Exceptions are error-handling objects covered in detail in Hour 24, “Dealing with Exceptions and Error Handling.”
”

```
抜粋:: Rogers Cadenhead  “C++ in 24 Hours, Sams Teach Yourself”。 Apple Books  
