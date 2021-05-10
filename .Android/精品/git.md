http://git-scm.com/book/zh/v2
```git
$ git commit -m 'initial commit' 
$ git add forgotten_file
$ git commit --amend
```
# 最终你只会有一个提交——第二次提交将代替第一次提交的结果。

## 你可以简单地使用git log命令查看各个分支当前所指的对象。提供这一功能的参数是--decorate。
$ git log --oneline --decorate

$ git log --oneline --decorate --graph --all

# git merge --abort来简单地退出合并。
$ git status -sb

# 可以运行git reset --hard HEAD回到上一次提交的状态。

# 如果你的团队中的某个人可能不小心重新格式化空格为制表符或者相反的操作，这会是一个救命稻草。
这次使用 -Xignore-all-space 或 -Xignore-space-change 选项。 第一个选项在比较行时 完全忽略 空白修改，第二个选项将一个空白符与多个连续的空白字符视作等价 的。

# 通过git show命令与一个特别的语法，你可以将冲突文件的这些版本释放出一份拷贝。
```git
$ git ls-files -u

$ git show :1:hello.rb > hello.common.rb 
$ git show :2:hello.rb > hello.ours.rb
$ git show :3:hello.rb > hello.theirs.rb

#  git diff --ours

$ git clean -f

$ git merge-file -p \
hello.ours.rb hello.common.rb hello.theirs.rb > hello.rb
$ git diff -b

```

# $ git log --graph --oneline --decorate --all

git checkout --conflict=diff3 hello.rb

# git checkout命令也可以使用--ours和--theirs选项，这是一种无需合并的快速方式，你可以选择留下 一边的修改而丢弃掉另一边修改。

#  git log --oneline --left-right --merge 


 
