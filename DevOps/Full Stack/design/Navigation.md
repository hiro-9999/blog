# React + Redux
https://qiita.com/makishy/items/bb014073d6e494b1b35f

# route
https://numb86-tech.hatenablog.com/entry/2019/11/03/184813

# hook
https://usehooks.com/


# How to set active tab in Tab from Material UI programatically
https://stackoverflow.com/questions/45978712/how-to-set-active-tab-in-tab-from-material-ui-programatically
# map ok
```
// Mapオブジェクトを生成する(キーと値の型はstring)
let map = new Map<string, string>();

// 値を追加する
map.set("key1", "value1");
map.set("key2", "value2");

// 要素の数
console.log(map.size); //=> 2

// キーから値を取得する
console.log(map.get("key1")); //=> value1
// キーが存在しないとき
console.log(map.get("hoge")); //=> undefined

// キーの一覧を取得する
console.log(map.keys()); //=> MapIterator { 'key1', 'key2' }

// 値の一覧を取得する
console.log(map.values()); //=> MapIterator { 'value1', 'value2' }

// キーと値の一覧を取得する
console.log(map.entries()); //=> MapIterator { [ 'key1', 'value1' ], [ 'key2', 'value2' ] }

// 反復処理
map.forEach(
    (value: string, key: string) => console.log(key + "=" + value)
);
```



# How to Create a Navigation Bar and Sidebar Using React
https://codeburst.io/how-to-create-a-navigation-bar-and-sidebar-using-react-348243ccd93
```
const Styles = styled.div`
  .navbar { background-color: #222; }
  a, .navbar-nav, .navbar-light .nav-link {
    color: #9FFFCB;
    &:hover { color: white; }
  }
  .navbar-brand {
    font-size: 1.4em;
    color: #9FFFCB;
    &:hover { color: white; }
  }
  .form-center {
    position: absolute !important;
    left: 25%;
    right: 25%;
  }
`;
```
# nav good
import Nav from 'react-bootstrap/Nav'
https://react-bootstrap.github.io/components/navs/
npm install react-bootstrap --save

# hook
https://fettblog.eu/typescript-react/hooks/

# focus
https://medium.com/@martin_hotell/react-refs-with-typescript-a32d56c4d315

```
class UserContainer extends React.Component {
  render() {
    return (
      <div>
        <Route
          exact
          path={this.props.match.url}
          render={() => (
            <div>
              <UserListSearch
                handleSearchChange={this.handleSearchChange}
                searchTerm={this.state.searchTerm}
              />
              <UserList
                isLoading={this.state.isLoading}
                users={this.props.users}
                user={this.state.user}
                handleNewUserClick={this.handleNewUserClick}
              />
            </div>
          )}
        />
      </div>  
    )
  }
  Here's a variation of @pshrmn's refocus component, using hooks and TypeScript:

let prevPathName: string | null = null

const FocusOnRouteChange: React.FC = ({ children }) => {
    const history = useHistory()

    const ref = useRef<HTMLDivElement>(null)

    history.listen(({ pathname }) => {
        // don't refocus if only the query params/hash have changed
        if (pathname !== prevPathName) {
            ref.current?.focus()

            // prevent jank if focusing causes page to scroll
            window.scrollTo(0, 0)

            prevPathName = pathname
        }
    })

    return (
        <div ref={ref} tabIndex={-1} style={{ outline: 'none' }}>
            {children}
        </div>
    )
}
https://github.com/ReactTraining/react-router/issues/5210
}
https://stackoverflow.com/questions/22573494/react-js-input-losing-focus-when-rerendering
```
# currentPath
https://css-tricks.com/the-hooks-of-react-router/
