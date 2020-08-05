 <Count>{`${children} of hahahha `}</Count>
 # String change
 
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
https://www.npmjs.com/package/@storybook/addon-info

# npm i
