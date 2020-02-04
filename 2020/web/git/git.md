ローカルmasterブランチへ作業ブランチの内容を取り込む。
$ git merge master hoge_branch

https://qiita.com/hikaru_/items/dc875b27a515f9ee9284


http://sota1235.com/blog/2015/03/19/git-rebase.html
マージした後、未だコミットしていない場合

git reset --hard HEAD
マージした後、コミットも行っている場合

git reset --hard ORIG_HEAD
 
 ## git checkout
 ## git fetch origin
 
 ## git pull
 ブランチを最新にする
 
 ## git merge
 https://backlog.com/ja/git-tutorial/stepup/09/

pullというのは内部でfetch + mergeをしているからです。

## masterブランチの最新のタグ名を確認
$ git describe
　　 v1.6.23
   https://qiita.com/sai2017/items/f884f7e35de9579977db
