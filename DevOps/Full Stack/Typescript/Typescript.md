https://www.manning.com/books/typescript-quickly
# ユーザーエージェント検索
https://www.plus-a.net/tools/user_agent_list/?q=PlayStation

# この正規表現パターン
var regexp = /^(.+)\([0-9]+\)$/;
https://www.wareko.jp/blog/typescript-which-is-better-regexp-or-regular-expression-literal

# indexOf 
https://www.typescriptlang.org/
```
const paragraph = 'up.browser  (SCE, VTE)  (The  iOS fox /n PlayStation 4.211SCEE/12.11'+
 '/n jumps Secureplayer.22phone iOS RVideoApp-Smartphone the lazy dog. It barked.';
const regex =/RVideoApp-smartphone/i;
var regexp_o = new RegExp('PlayStation 4.+SCEE\\/[0-9.]+');
const found = paragraph.match(new RegExp('secureplayer(.*)?phone iOS','m'));

console.log(found);


const paragraph = 'The quick brown fox jumps over the lazy dog. If the dog barked, was it really lazy?';

const searchTerm = 'dog';
const indexOfFirst = paragraph.indexOf(searchTerm);

https://typescript-jp.gitbook.io/deep-dive/type-system/enums
export enum EvidenceTypeEnum {
  UNKNOWN = '',
  PASSPORT_VISA = 'passport_visa',
  PASSPORT = 'passport',
  SIGHTED_STUDENT_CARD = 'sighted_tertiary_edu_id',
  SIGHTED_KEYPASS_CARD = 'sighted_keypass_card',
  SIGHTED_PROOF_OF_AGE_CARD = 'sighted_proof_of_age_card',
}


let paragraph = 'The quick brown fox jumps over the lazy dog. It barked.';

let capturingRegex = /(?<animal>fox|cat) jumps over/;
found = paragraph.match(capturingRegex);
console.log(found.groups); // {animal: "fox"}


https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/match
```
https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/indexOf

# playground
https://www.typescriptlang.org/docs/handbook/basic-types.html

# 正規表現
http://okumocchi.jp/php/re.php

https://murashun.jp/blog/20190215-01.html

https://developer.mozilla.org/ja/docs/Web/JavaScript/Guide/Regular_Expressions

https://qiita.com/iLLviA/items/b6bf680cd2408edd050f

# git
https://git-scm.com/book/zh/v2
 
 
 # String change
  <Count>{`${children} of hahahha `}</Count>
  
 # typecript Basic
 https://www.typescriptlang.org/docs/handbook/basic-types.html
 
 https://www.typescriptlang.org/docs/handbook/typescript-in-5-minutes.html
 
 ## JavaScript for impatient programmers 
 https://exploringjs.com/impatient-js/
 
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
