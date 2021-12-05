# install node
https://mako-note.com/install-node14-on-m1-mac/
```
以下コマンドでnvmをインストールします。

Terminal
 curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.38.0/install.sh | bash
以下を~/.zshenvに追記してnvmをロードします。

˜/.zshenv
 export NVM_DIR="$([ -z "${XDG_CONFIG_HOME-}" ] && printf %s "${HOME}/.nvm" || printf %s "${XDG_CONFIG_HOME}/nvm")"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"

nvm install v17.2.0
nvm use v17.2.0
```
