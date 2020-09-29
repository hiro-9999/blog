# useSelector -> get state (data)
Redux Hooks によって、connect() を利用しなくても、各コンポーネントとdispatch, state が簡便に利用できるようになります。
https://react-redux.js.org/next/api/hooks#useselector
## Redux Hooks を利用すると connect 部分の記述がなくなり¥
```
const defaultOptions = {
  // LanguageDetector
  order: ['querystring', 'cookie', 'localStorage'],
  detection: {
    lookupQuerystring: 'lang',
    lookupCookie: 'lg',
    lookupLocalStorage: 'i18nextLng',
  },
```
# redux typescript
https://spin.atomicobject.com/2020/09/09/type-safe-redux-typescript/

https://redux.js.org/recipes/usage-with-typescript

# npm install --save-dev redux-devtools

以下は、アプリケーションのデータフローの図です。
ViewはDispatcherにActionを送る
DispatcherはすべてのStoreにアクションを送る
## StoreはViewにデータを送り、表示データの更新をする
https://qiita.com/makishy/items/857bb838a2910eb34da3

# redux
https://webbibouroku.com/Blog/Article/redux-ducks


# useSelector
https://medium.com/@ymmo.9m/connectで苦しまいない-react-reduxの-useselectorとtypescript-f6bed3d3e444
# shallowEqual
import { shallowEqual } from 'react-redux'

useSelectorを用いる時は大きいオブジェクトを一度に返すのではなく、細かく必要な値ごとに用いる
'''
const ContainerB = () => {
  const val3 = useSelector((state: State) => state.val3)
}
'''

import { useSelector } from 'react-redux'
https://qiita.com/ky7ieee/items/b3f43ecc497b9115449a

import { Provider } from 'react-redux'

# reducer
https://qiita.com/numa999/items/4bb4e61918573149ab4b

# useDispatch


# redux-saga
https://qiita.com/tqm1990/items/5e6cb017d4f6675636c7

# Redux Toolkitが提供しているcreateSlice
https://tech.aptpod.co.jp/entry/2020/06/26/090000

