https://styled-components.com/docs/faqs#why-am-i-getting-html-attribute-warnings


https://tech-1natsu.hatenablog.com/entry/2019/07/06/115606


https://github.com/styled-components/styled-components/issues/1198

<Button gray={gray ? 1 : 0} to='path/to/page'>hoge</Button>


https://stackoverflow.com/questions/57185059/when-using-props-in-styled-component-it-works-well-but-shows-warning-warning-r
```
import React from 'react'  
import styled from 'styled-components';
import { Button } from '@material-ui/core';

interface Cnt {
  cen?: string
}
const Bnt3 = styled(Button)`
&&{
  ${(props:Cnt) => props.cen && 'display: block;'}
  margin: 30px auto;
  border-radius: 24px;
  padding: 8px 28px;
}`

const Test: React.FC = () => {
  return (
    <>
    <Bnt3 cen='true' variant="contained" type="button" color="secondary" >Log In</Bnt3>
    <Bnt3 variant="contained" type="button" color="secondary">Log In</Bnt3>
    </>
  ); 
}
export default Test;

```

