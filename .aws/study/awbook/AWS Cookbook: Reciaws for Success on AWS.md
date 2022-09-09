https://github.com/orgs/AWSCookbook/repositories?type=all

# cli
ls -la ~/.aws

cat ~/.aws/config

https://rurukblog.com/post/awcli-mac-install/

https://docs.aws.amazon.com/ja_jp/cli/latest/userguide/getting-started-install.html

https://dev.classmethod.jp/articles/mac-aws-cli/

https://aws.amazon.com/jp/cli/

>AWS CloudShell

https://udemy.benesse.co.jp/development/system/aws-cli.html

https://docs.aws.amazon.com/ja_jp/cli/v1/userguide/install-macos.html

# AWS Cookbook 
2022/09/08 start
https://github.com/awscookbook

## アクセスキーとシークレットアクセスキーは以下の手順
https://www.karakaram.com/aws-cli-getting-started/
```
aws configure
AWS Access Key ID [None]: AKIAXXXXXXXXXXXX
AWS Secret Access Key [None]: vlxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
Default region name [None]: us-east-1
Default output format [None]: json
設定が完了すると ~/.aws/credentials と ~/.aws/config に入力した内容が書き込まれます。直接ファイルを編集しても大丈夫です。
export AWS_REGION=us-east-1

  % AWS_ACCOUNT_ID=$(aws sts get-caller-identity \
       --query Account --output text)
  % aws sts get-caller-identity
  
  aws secretsmanager list-secrets
  
  
  
```

AWS Cloud Development Kit (CDK)

CLI - 命令行界面(Command Line Interface); 
```
brew install awscli@2

brew install --cask vscodium

 brew install python@3.10
//python3 -V
alias python='python3'
alias pip='pip3'

python -V
Python 3.10.6


https://zenn.dev/otohbk_ky/articles/b9b7d26255db78

npm i -g aws-cdk@next

mkdir ~/AWSCookbook && cd ~/AWSCookbook

vi  ~/.bash_profile
source ~/.bash_profile
```

