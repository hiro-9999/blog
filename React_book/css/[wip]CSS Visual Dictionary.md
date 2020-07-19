“CSS has 525 unique properties.

 ```rub
You can verify this with a simple JavaScript code snipplet as follows:
    var element = document.createElement("div");
    var count = 0;
    for (index in element.style) count++;
    console.log(count); // outputs 525 as of June 1st, 2020.”
```
“CSS Selectors
Source Code 29
#id { } /* Select a single element whose id attribute is "id" */
 
Source Code 30
.class1 { } /* Select all elements whose class name is "class1" */
 
Source Code 31
#parent .class1 { } /* Select all elements whose class name is "class1" cascading under another parent element whose id is "parent" */”

抜粋:: Greg Sidelnikov  “CSS Visual Dictionary”。 Apple Books  
