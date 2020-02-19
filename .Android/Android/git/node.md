
cd front/react

nvm list
nvm use --delete-prefix v12.13.1
nvm alias default 12.13.1
nvm use 12.13.1

npm ci
npm audit
