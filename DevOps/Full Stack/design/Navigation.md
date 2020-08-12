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
