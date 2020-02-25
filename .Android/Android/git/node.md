https://qiita.com/sansaisoba/items/242a8ba95bf70ba179d3
nvm 
nodebrew install-binary v12.13.1
nodebrew use v12.13.1


cd front/react

nvm list
nvm use --delete-prefix v12.13.1
nvm alias default 12.13.1
nvm use 12.13.1

npm ci
npm audit
