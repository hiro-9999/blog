```

“const arr = [1, 2, 3, 4];
const iterator = arr.keys();

// prints "0, 1, 2, 3", one at a time, because the
// array contains four elements and these are their indexes
let index = iterator.next();
while(!index.done) {
  console.log(index.value);
  index = iterator.next();
}”
```

抜粋:: Aurelio De Rosa  “The Modern JavaScript Collection”。 Apple Books  
