http://git-scm.com/book/zh/v2
```git
$ git commit -m 'initial commit' 
$ git add forgotten_file
$ git commit --amend
```
# 最终你只会有一个提交——第二次提交将代替第一次提交的结果。

## 你可以简单地使用git log命令查看各个分支当前所指的对象。提供这一功能的参数是--decorate。
$ git log --oneline --decorate
