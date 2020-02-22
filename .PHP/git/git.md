## リモートリポジトリのコミットバージョンを戻す

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
