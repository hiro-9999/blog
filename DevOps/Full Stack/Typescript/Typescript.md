
 # String change
  <Count>{`${children} of hahahha `}</Count>
  
 # typecript Basic
 https://www.typescriptlang.org/docs/handbook/typescript-in-5-minutes.html
 
 JavaScript for impatient programmers 
 
 # funtion
 const a = (b)=> a*b

```
const insertComma = (number: number): string => {
  const result = number.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,')
  return result
}

const getPerPageItem = (pageNumber: number): string => {
  return `${insertComma(pageNumber)} - 60`
}

const ItemCount: React.FC<IItemCountProps> = ({ currentPageNumber = 1, totalItemCount = 1 }) => (
  <>
    <StyledItemCount>{`${getPerPageItem(currentPageNumber)} of ${insertComma(totalItemCount)} items`}</StyledItemCount>
  </>
)
```
# npm run storybook
https://github.com/storybookjs/storybook

https://www.npmjs.com/package/@storybook/addon-info

https://github.com/storybookjs/storybook/tree/release/3.4/addons/viewport

# addonの基本的な導入方法
npm i -D @storybook/addon-viewport
https://blog.spacemarket.com/code/storybook-addon/

# npm i

# Atomic Design
