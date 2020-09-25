## Recommended VS code extension
- ESLint
- Prettier
- TSLint
- vscode-styled-components
- Reactjs code snippets
- (browser)React Developer Tools
- (browser)Redux DevTools
Storybook

npm install webpack-dev-server -g
npm link webpack
npm install html-webpack-plugin

# npm-update-all ok
https://www.npmjs.com/package/npm-update-all

# kill pid
```
lsof -i :3000
kill -9 72038
```


<style type="text/css">
    .hidden { display:none; }
</style>
render: function() {
    return (
      <div className={this.props.shouldHide ? 'hidden' : ''}>
        This will be hidden if you set <tt>props.shouldHide</tt> 
        to something truthy.
      </div>
    );
}

// or in more modern JS and stateless react
const Example = props => <div className={props.shouldHide}/>Hello</div>
