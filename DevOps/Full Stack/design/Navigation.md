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
}
https://stackoverflow.com/questions/22573494/react-js-input-losing-focus-when-rerendering
```
