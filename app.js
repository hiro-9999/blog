const electron = require('electron')
const app = electron.app
const BrowserWindow = electron.BrowserWindow

let url
if (process.env.NODE_ENV === 'DEV') {
  url = 'http://localhost:3000/'
} else {
  url = `file://${process.cwd()}/dist/index.html`
}
console.log('The url with the content:' + url);
app.on('ready', () => {
  let window = new BrowserWindow({width: 800, height: 600})
  window.loadURL(url)
})