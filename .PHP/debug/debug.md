https://medium.com/@prtdomingo/editing-files-in-your-linux-virtual-machine-made-a-lot-easier-with-remote-vscode-6bb98d0639a4
```
brew install wget
$ sudo wget -O /usr/local/bin/rmate https://raw.github.com/aurora/rmate/master/rmate
$ sudo chmod a+x /usr/local/bin/rmate

rmate
https://medium.com/@prtdomingo/editing-files-in-your-linux-virtual-machine-made-a-lot-easier-with-remote-vscode-6bb98d0639a4
local machine
Install "Remote VSCode" in VS Code
Download https://raw.githubusercontent.com/aurora/rmate/master/rmate to ~/temp/rmate


mkdir -p ~/temp/rmate
curl -o ~/temp/rmate/rmate.txt  https://raw.githubusercontent.com/aurora/rmate/master/rmate.txt

scp ~/temp/rmate net@192.168.25.6@:~/rmate
on dev
sudo cp /home/net/rmate /usr/local/bin/rmate
sudo chmod a+x /usr/local/bin/rmate
ssh -R 52698:localhost:52698 net@192.168.25.6@
rmate index.php

```
