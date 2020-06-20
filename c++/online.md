# online c
https://www.learn-c.org/en/Static
```rub
   int sum (int num) {
       /**
       * find sum to n numbers
        * static 可累加！！！
       */
    static  int count = 0; 
   count= count+num;
    return count;
   }

```
