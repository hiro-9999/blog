## リモートリポジトリのコミットバージョンを戻す
'''rub
念の為バックアップを作成
git push origin master:master_bk
一つ前に戻す場合
git push -f origin HEAD^:master
特定のコミットバージョンに戻す場合
git push -f origin ハッシュ値:master
バックアップを削除
git push origin :master_bk


git commit -a -m "commit"

https://qiita.com/konweb/items/621722f67fdd8f86a017

git fetch origin
git reset --hard HEAD

'''

⭕️このコマンドを打った後、認証をすると、次回から認証が省略される。
git config --global credential.helper store


【想定】
現在のブランチ：issue001-fix-xxx
マージ先ブランチ：master
'''rub
~~~ プログラム修正後 ~~~
前回コミット(HEAD)からの差分

git diff HEAD
ステージングエリアとHEADとの差分

git diff --staged
git diff --cached
'''
