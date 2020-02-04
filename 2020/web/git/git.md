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
 ## git merge
 https://backlog.com/ja/git-tutorial/stepup/09/
