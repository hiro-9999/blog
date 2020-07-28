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

