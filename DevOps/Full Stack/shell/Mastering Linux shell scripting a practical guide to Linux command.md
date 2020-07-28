Mastering Linux shell scripting a practical guide to Linux command- line, Bash scripting, and Shell programming by Mokhtar Ebrahim Andrew Mallett (z-lib.org).pdf

https://github.com/PacktPublishing/Mastering-Linux-Shell-Scripting-Second-Edition


# bash debug
vscode

# sh shell
 bash shell
 ksh shell
 Csh and tcsh
 
 
# $ type pwd
pwd is a shell builtin

# $ cat  /etc/shells

/bin/bash
/bin/csh
/bin/dash
/bin/ksh
/bin/sh
/bin/tcsh
/bin/zsh

# $ echo $0
-bash

$ echo $SHELL
/bin/bash

$ env | grep SHELL
SHELL=/bin/bash

# 修改默认shell：
$ chsh -s /bin/bash


$ type nano
nano is /usr/bin/nano

# creat shell script
```
#!/bin/bash
echo "hello $1" #frist arguments
echo "hello $*" #all arguments
echo "$(basename $0)" #filename
name="haha"
export name
exit 0
./sample.sh
dir='pwd'
echo $dir
dir=$(pwd)
echo $dir
read -p "your name:" name
echo $readword
```

# chmod +x sample.sh
nano test.sh
$ ./test.sh haha

$ printenv HOME

# debug 
bash -x
bash -v

$ which echo
/bin/echo


if [12 -gt 10] #great than
then
else
fi
