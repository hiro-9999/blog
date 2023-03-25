https://www.udemy.com/cart/success/896163110/

# gitignore io
https://www.toptal.com/developers/gitignore


# doc
https://www.terraform.io/

https://developer.hashicorp.com/terraform/language

https://developer.hashicorp.com/terraform/cli

https://registry.terraform.io/providers/hashicorp/aws/latest

# command
```terraform
$ aws configure で認証情報をセットした後であれば自動でこのAWS認証情報を参照してくれます
※~/.aws/credentials にAWSの認証情報が保存されます

terraform init
terraform fmat #source format
terraform validate #check
terraform plan
terraform apply -auto-approve #実行planがcheckしない

terraform show を見てみる
terraform が作成したオブジェクトの内容が出力されます

terraform destroy

terraform validate
次に、terraform validateコマンドで記述されたファイルが構文的に正しいかなどの検査を行います。
とくにmoduleを使って値の引き渡しをする際のチェックに効果的とされています。
https://blog.mmmcorp.co.jp/blog/2022/10/31/terraform-apply-safely/
```
# ci/cd
https://engineering.mercari.com/blog/entry/20220519-terraform-ci-code-execution-restrictions/
