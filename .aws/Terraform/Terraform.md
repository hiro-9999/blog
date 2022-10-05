https://www.hashicorp.com/products/terraform

https://www.terraform.io/docs/glossary#cli

https://github.com/hashicorp/hcl

https://github.com/hashicorp/hcl/blob/main/hclsyntax/spec.md

Terraform code is written in the HashiCorp Configuration Language (HCL) in files with the extension .tf.

“https://github.com/brikis98/terraform-up-and-running-code”

https://www.terraform.io/language/syntax/configuration

抜粋:
Terraform: Up and Running, 3rd Edition
Yevgeniy Brikman
この素材は著作権で保護されている可能性があります。

Virtual Private Cloud (VPC) within AWS

Elastic Kubernetes Service (EKS) 

terraform-aws-modules eks.

# 自動でフォーマット整形
```
前提条件
PhpStormを導入
Terraformを導入(バージョン0.11.11(2019/07時点))
terraform install
# tfenv をインストール
brew install tfenv
 
# バージョン0.11.11をインストール
tfenv install 0.11.11
tfenv use 0.11.11
 
terraform -v

コマンド実行
Terraformを導入すると打てるようになる｡

1.	
terraform fmt ファイル名.tf
ファイル名を指定してフォーマットを整える｡
PhpStormを使用したフォーマット整形
上記のコマンドでもコードフォーマットができるが､PhpStormを使用場合､コマンドを打たなくてもショートカットのみで整形してくれる｡
｢command + option + shift + f｣で対象ファイルを整形できる｡
以下に導入方法を示す｡
No.
概要
No.
概要
1.	PhpStorm内でpreferences(日本語だと環境設定)を開く｡
2.	plugin(日本語だとプラグイン)を選択､｢marketplace(日本語だとマーケットプレイス)｣を選択する｡
3.	marketplace内で｢terraform｣と検索｡｢HashiCorp Terraform/HCL language support｣をインストール
4.	導入完了｡ ｢command + option + shift + f｣でフォーマット整形ができるようになる｡
VScodeを使用したフォーマット整形
VScodeを使用している場合、対象のpluginをinstallするとファイル保存時に自動でフォーマット整形を行うことができる。
以下に導入方法を示す。
No.
概要
1.	VScode内のExtensionsからvscode-terraformをinstallする。(https://marketplace.visualstudio.com/items?itemName=mauve.terraform)
2.	VScode内のpreferences → Settings画面の検索ボックスで、 [terraform]editor.formatOnSave と検索する。
3.	Editor: Format On Save のチェックボックスにチェックを入れる
4.	導入完了｡　⌘S でファイル保存時に、自動でフォーマット整形ができるようになる。


```

＃＃＃ Terraform Cookbook
https://github.com/PacktPublishing/Terraform-Cookbook



# asdfでterraform0.1系をM1 Macで使いたいときの方法 🔴
https://qiita.com/ume3_/items/2d95d4cb61cc6a205fba

# epub to pdf
https://www.freepdfconvert.com/ja


# terraform
https://learn.hashicorp.com/tutorials/terraform/install-cli

# books
```
Terraform: Up & Running Code
https://github.com/brikis98/terraform-up-and-running-code
infrastructure as code (IaC) 


```
# Terraform入門シリーズ 🔴
https://qiita.com/m-oka-system/items/6103bbb9f103db1fea0e

＃ Terraform 入門から精通まで（コマンド整理）
https://qiita.com/youyonghua/items/782bd0cdbceaa5d8ff0a


# arm64 向け terraform 実行環境を Docker で用意する
https://qiita.com/mziyut/items/a71a300ea8d4ebb69e14


## Terraformは、
https://www.terraform.io/?_fsi=rBBdiX70

IaCを実現するツールです。Terraformはオープンソースであり、
HashiCorpによってGo言語で開発されました。具体的にはTerraformではインフラの構成をコードで宣言します。
構造化された構成ファイルでは、手動で操作することなくインフラ構成を自動で管理できます。インフラの初期プロビジョニング、更新、破棄、いずれもTerraformではコードにより宣言し、実行します。

https://www.lac.co.jp/lacwatch/service/20200903_002270.html

## pulumi 2019
https://www.pulumi.com/docs/get-started/aws/begin/

https://www.pulumi.com/docs/intro/vs/terraform/

## ansible 2012

chef /erlang ruby

puppet /ruby tool
