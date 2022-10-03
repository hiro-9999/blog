

# github コードを戻し
https://www-creators.com/archives/1290



https://qiita.com/rch1223/items/9377446c3d010d91399b

```
// 作業ツリー、インデックス、すべての変更をHEADに合わせる。
git reset --hard HEAD^
git reset は、オプション次第で、 作業ツリーだけはそのままにしておくこともできます。下記はオプションなし（--mixedオプション）です。

// インデックス、すべての変更をHEADに合わせる（ 作業ツリーだけそのまま）
git reset HEAD^
--softオプションでは、作業ツリーとインデックスがそのままで、HEADだけ書き換わります。

// ワークツリー、インデックスはそのまま。
git reset --soft HEAD^


RevertコミットをPushする
上記で紹介した「git revert」でつくった、取り消しコミットをPushすればOKです。これは、過去の履歴に盈虚を与えないので、比較的安全な方法です。


な変更をしたのかなどが簡単に確認できます。またその履歴から、特定のコミット時点の状態にファイルを復元できます。

以前はgit checkoutで行いましたが、現在はgit restoreが推奨です。

基本的な構文はシンプルにファイルパスを指定するだけです。

$ git restore <file_path> https://dev.classmethod.jp/articles/git-revert-single-file/

```
