https://recoiljs.org/

Refine 0.1.1
August 18, 2022 

https://recoiljs.org/docs/introduction/getting-started

```react
import React from 'react';
import {
  RecoilRoot,
  atom,
  selector,
  useRecoilState,
  useRecoilValue,
} from 'recoil';

function App() {
  return (
    <RecoilRoot>
      <CharacterCounter />
    </RecoilRoot>
  );
}
```
