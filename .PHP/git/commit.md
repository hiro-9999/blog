# Bitbucketに公開鍵を登録
https://qiita.com/ksugawara61/items/a4f34e5e120bea1732d5
'''
$ cd ~/.ssh
$ ssh-keygen -t rsa -C hoge@example.com  # 自分のメールアドレス
'''

https://qiita.com/ponsuke0531/items/1a899d58daad15c4f2b6

git status

git add {ファイルパス}

# $ git commit -m "Commitコメント"

# Pushする
$ git push



# Git のユーザー名を設定してください:

$ git config --global user.name "Mona Lisa"
Git のユーザ名が正しく設定されたことを確認します:

$ git config --global user.name
> Mona Lisa
単一のリポジトリ用に Git ユーザ名を設定する
ターミナルを開いてください。

現在のワーキングディレクトリをGitコミットと関連付けた名前を設定したいローカルリポジトリに変更します。

Git のユーザー名を設定してください:

$ git config user.name "Mona Lisa"
Git のユーザ名が正しく設定されたことを確認します:

$ git config user.name
> Mona Lisa


https://qiita.com/non0311/items/03e3e7a042f70f072286
[root@www ◯◯]# git remote set-url origin git@github.com:△△××/◯◯△△.git
[root@www ◯◯]# 
[root@www ◯◯]# git remote -v
origin  git@github.com:△△××/◯◯△△.git (fetch)
origin  git@github.com:△△××/◯◯△△.git (push)
