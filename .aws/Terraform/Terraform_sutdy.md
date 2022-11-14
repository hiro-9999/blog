https://www.pudn.com/news/62a9137adfc5ee19686df54e.html

＃＃ 知らず知らずのうちに Terraform がディスクをほとんど一杯にしてた
https://qiita.com/tonishy/items/adcf67e959dffaa03f93

# TerraformではじめるAWS構成管理
https://sakuya-chips.com/442/

tfenvをインストール https://github.com/tfutils/tfenv
```shell
$ brew install tfenv
$ echo ‘export PATH=”$HOME/.tfenv/bin:$PATH”‘ >> ~/.bash_profile
$ source ~/.bash_profile

Terraform本体を、tfenvを使ってインストールします。
コマンド：
$ tfenv install
$ terraform -v

creat .tf file
$ terraform init

AWSに設定を送信する前に、確認のためのコマンドを打ってみましょう
$ terraform plan

それではいよいよAWSに設定を送信して見ましょう
コマンド：
$ terraform apply
```
