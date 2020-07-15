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

# git diff
http://www-creators.com/archives/755

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

// リモートを取ってきて・・
git fetch origin master

// [ローカル] → [リモート追跡]の差分を見る
git diff master origin/master


Gitコマンドまとめ100選！


git init

リポジトリをカレントディレクトリに作成する。

git init [DIRECTORY] 
カレントディレクトリに指定したディレクトリ名のリポジトリを作成する。

git init –bare

ベアリポジトリを作成する。

git init –shared

リポジトリを作成する。リポジトリへのグループ書き込み権限を追加する。

git clone ssh://[USER]@[HOSTNAME OR IPADDRESS]:22/[GIT-DIRECTORY-PATH] 
既存リポジトリの複製(SSH(ポート22のとき))

git clone http://[HOSTNAME OR IPADDRESS]:80/[GIT-DIRECTORY-PATH] 
既存リポジトリの複製(HTTP(ポート80のとき))

git clone https://[HOSTNAME OR IPADDRESS]:443/[GIT-DIRECTORY-PATH] 
既存リポジトリの複製(HTTPS(ポート443のとき))

git clone file:///[GIT-DIRECTORY-PATH] 
既存リポジトリの複製(ローカルのとき)

git config –global user.name [USERNAME] 
現在のユーザーの全コミット時の名称を設定する。

git config –global user.email [USERMAIL] 
現在のユーザーの全コミット時のメールアドレスを設定する。

git config –global –edit

設定ファイルの編集を行う。

git log

コミットログを確認する。

git log –oneline

コミットログを確認する。
(1行１コミット)

git log –author=”[USERNAME]”

指定ユーザのコミット履歴を表示する。

git log –grep=”[REGEXPATTERN]”

正規表現でコミットメッセージを検索。ヒットしたコミットを表示する。

git log [FILE] 
指定ファイルのコミット履歴を確認する。

git log –author=”[USERNAME]” -p [FILE] 
指定ユーザが指定ファイルに対して行ったコミット履歴を確認する。

git status

リポジトリ内での追加/変更ファイルの確認

git show

最新コミットの内容を表示する。

git show [TAG] 
指定したタグのコミット内容を表示する。

git show-branch

ブランチの作成・変更・マージなどの履歴を表示する。

git diff

インデックスと作業ディレクトリの差分を表示する。

git diff –cache

HEADとインデックスの差分を表示する。

git diff [COMMITID1] [COMMITID2] 
２つのコミットの差分を表示する。

git diff [FILE] 
指定したファイルの差分を表示する。

git reflog

HEADの移動情報のログを確認する。
(誤ってhardリセットしてしまったときなどはこれを参照して元に戻れる。)

git reflog –relative-date

相対日付でreflogを表示する。

git tag

タグの一覧を表示する。

git tag [TAG] 
現在のコミットにタグ付けする。

git tag [TAG] [COMMITID] 
指定したコミットIDにタグ付けする。

git tag -d [TAG] 
指定したタグを削除する。

git add [FILE1] [FILE2] … [FILEn] 
コミットファイルの指定(インデックスに追加される)

git add .

カレントディレクトリの内容を全てインデックスに追加する。

git rm [FILE] 
指定したファイルを作業ディレクトリとインデックスから削除する。

git rm –cache [FILE] 
指定したファイルをインデックスから除外する。

git rm -r [DIRECTORY] 
指定したディレクトリ以下を再帰的に削除する。。

git mv [FILEOLD] [FILENEW] 
ファイルをリネームする。

git mv [FILE] [DIRECTORY] 
指定したファイルを指定ディレクトリへ移動

git commit

git addで指定されていたファイルのコミット

git commit -a

Git管理対象ファイルを全てコミットする。

git commit -v

変更箇所を表示してコミットする。

git commit -m “[MESSAGE]”

コミットメッセージを指定した状態でコミット

git commit –amend

直前のコミットの内容を現在のステージング内容と結合して上書き
(共有リポジトリにプッシュしたものについては行わないようにする)

git reset HEAD

インデックスを取り消す（＝git addの取消し）

git reset HEAD^

HEADを一つ前の状態に戻し、インデックスは取り消し。

git reset –soft HEAD

これは特に変化なし。

git reset –soft HEAD^

HEADを一つ前の状態に戻す。
(softオプション有りなのでインデックス＆作業ディレクトリは変わらず)

git reset –mixed HEAD

「git reset HEAD」と同様。

git reset –mixed HEAD^

「git reset HEAD^」と同様。

git reset –hard HEAD

作業ディレクトリの内容もHEADと同様になる。
(最終コミット後の作業ディレクトリにおける修正が全て戻る)

git reset –hard HEAD^

作業ディレクトリの内容も1つ前のコミットの状態に戻る。

git reset [COMMITID] 
指定したコミットIDの状態に戻る。

git revert [COMMITID] 
指定したコミットを打ち消すコミットを作成する。

git revert –continue

revertを継続する。

git revert –abort

revertをする前の状態に戻る。

git stash

作業ディレクトリとインデックスの変更内容をスタック領域に隠す。

git stash list

stashを一覧表示する。

git stash apply

最新stash内容を現在のブランチに戻す。
(stashリストには内容は残る)

git stash drop stash@{[NUMBER]}

指定した番号のstashをリストから削除する。

git stash pop

最新stash内容を現在のブランチに戻す。
(stashリストからも削除される)

git stash pop stash@{[NUMBER]}

指定した番号のstashを現在のブランチに戻す。
(stashリストからも削除される)

git stash clear

全stashをリストから削除する。

git cherry-pick [COMMITID] 
別ブランチの指定したコミットIDを現在のブランチに適用(新たにコミットが追加)する。

git checkout [BRANCH] 
指定ブランチをチェックアウトする

git checkout [COMMITID] 
作業ディレクトリを指定したコミットIDの状態にする。

git checkout -b [NEW-BRANCH] [COMMITID] 
新ブランチを指定したコミットIDから作成する。

git checkout -b [NEW-BRANCH] [ORG-BRANCH] 
新ブランチを元ブランチから作成する

git branch

ローカルブランチ一覧を表示する。

git branch -r

リモートブランチ一覧を表示する。

git branch -a

ローカル＆リモートブランチ一覧を表示する。

git branch [BRANCH] 
現在のブランチから指定したブランチを作成する。

git branch -d [BRANCH] 
指定したブランチを削除する

git merge [BRANCH] 
指定したブランチを現在のブランチにマージする

git merge [BRANCH] –no-commit

指定したブランチを現在のブランチにマージする。コミットはしない。

git merge –no-ff [BRANCH] 
指定したブランチを現在のブランチにマージする。
(fast-forwardマージが可能であったとしても、新たにコミットを作成する)

git merge –squash [BRANCH] 
指定したブランチの全コミットを、ひとつのコミットとしてまとめて現在のブランチにマージする。

git rebase [BRANCH] 
現在のブランチを指定ブランチにリベースする

git rebase -i [BRANCH] 
現在のブランチを指定ブランチにリベースする
(現在のブランチのコミット履歴を確認し、結合したりしてからリベースできる)

git rebase –continue

リベースを続ける。

git rebase –abort

リベースを中断する。
(リベースを開始する前の状態に戻る)

git remote

リモートリポジトリへの接続一覧を表示する。

git remote add [REMOTENAME] [URL] 
リモートリポジトリへの新規接続を作成する。

git remote rm [REMOTENAME] 
リモートリポジトリ接続を削除する。

git remote rename [REMOTENAMEOLD] [REMOTENAMENEW] 
リモートリポジトリ接続名を変更する。

git fetch [REMOTENAME] 
リモートリポジトリから全ブランチをフェッチする。

git fetch [REMOTENAME] [BRANCH] 
指定したリモートリポジトリから指定したブランチをフェッチする。

git fetch -p

リモートブランチで消去されたブランチをローカルブランチから消す。

git pull [REMOTENAME] [BRANCH] 
指定したリモートリポジトリから指定したブランチをフェッチ＋現在のブランチにマージする。

git pull –rebase [REMOTENAME] 
指定したリモートリポジトリから全ブランチをフェッチ＋現在のブランチにリベースする。

git push [REMOTENAME] [BRANCH] 
指定したリモートリポジトリの指定したブランチへ現在のブランチをプッシュする。

git push -u [REMOTENAME] [BRANCH] 
現在のブランチの上流を指定したリポジトリの指定ブランチとする。

git push [REMOTENAME] –force

fast-forwardマージ以外であっても強制的にプッシュを行う。

git push [REMOTENAME] –all

全てのローカルブランチをリモートリポジトリへプッシュする。

git push –delete [REMOTENAME] [BRANCH] 
指定したリモートブランチを削除する。

git push [REMOTENAME] :[BRANCH] 
指定したリモートブランチを削除する。
(git push –delete [REMOTENAME] [BRANCH]と同様)

git clean

Git管理対象外のファイルを削除する。

git fsck –full

リポジトリのチェックを行う。

git gc

リポジトリ内の不要オブジェクトを削除する。

git mergetool

Gitマージツールを使う。

git archive -o [ZIP] HEAD

HEADのコミット内容を指定したZIPファイルにアーカイブする。
'''

解決策
## fatal: No url found for submodule path 
以下のようにするととりあえず解決
(outputが出ないときもあるが。。)
$ git rm -r --cached --ignore-unmatch path-to-target/
あとは、普通にcommit すれば直るよう。
$ git commit

