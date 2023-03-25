https://www.udemy.com/cart/success/896163110/

# gitignore io
https://www.toptal.com/developers/gitignore


# doc
https://www.terraform.io/

https://developer.hashicorp.com/terraform/language

https://developer.hashicorp.com/terraform/cli

https://registry.terraform.io/providers/hashicorp/aws/latest

# main.tf
```
# ---------------------------------------------
# Terraform configuration
# ---------------------------------------------
terraform {
  required_version = ">=0.13"
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 3.0"
    }
  }
}

# ---------------------------------------------
# Provider
# ---------------------------------------------
provider "aws" {
  profile = "terraform"
  region  = "ap-northeast-1"
}

# ---------------------------------------------
# Variables
# ---------------------------------------------
variable "project" {
  type = string
}

variable "environment" {
  type = string
}

```

# network.tf
```
# ---------------------------------------------
# VPC
# ---------------------------------------------
resource "aws_vpc" "vpc" {
  cidr_block                       = "192.168.0.0/20"
  instance_tenancy                 = "default"
  enable_dns_support               = true
  enable_dns_hostnames             = true
  assign_generated_ipv6_cidr_block = false

  tags = {
    Name    = "${var.project}-${var.environment}-vpc"
    Project = var.project
    Env     = var.environment
  }
}

# ---------------------------------------------
# Subnet
# ---------------------------------------------
resource "aws_subnet" "public_subnet_1a" {
  vpc_id                  = aws_vpc.vpc.id
  availability_zone       = "ap-northeast-1a"
  cidr_block              = "192.168.1.0/24"
  map_public_ip_on_launch = true

  tags = {
    Name    = "${var.project}-${var.environment}-public-subnet-1a"
    Project = var.project
    Env     = var.environment
    Type    = "public"
  }
}

resource "aws_subnet" "public_subnet_1c" {
  vpc_id                  = aws_vpc.vpc.id
  availability_zone       = "ap-northeast-1c"
  cidr_block              = "192.168.2.0/24"
  map_public_ip_on_launch = true

  tags = {
    Name    = "${var.project}-${var.environment}-public-subnet-1c"
    Project = var.project
    Env     = var.environment
    Type    = "public"
  }
}

resource "aws_subnet" "private_subnet_1a" {
  vpc_id                  = aws_vpc.vpc.id
  availability_zone       = "ap-northeast-1a"
  cidr_block              = "192.168.3.0/24"
  map_public_ip_on_launch = false

  tags = {
    Name    = "${var.project}-${var.environment}-private-subnet-1a"
    Project = var.project
    Env     = var.environment
    Type    = "private"
  }
}

resource "aws_subnet" "private_subnet_1c" {
  vpc_id                  = aws_vpc.vpc.id
  availability_zone       = "ap-northeast-1c"
  cidr_block              = "192.168.4.0/24"
  map_public_ip_on_launch = false

  tags = {
    Name    = "${var.project}-${var.environment}-private-subnet-1c"
    Project = var.project
    Env     = var.environment
    Type    = "private"
  }
}


# ---------------------------------------------
# Route Table
# ---------------------------------------------
resource "aws_route_table" "public_rt" {
  vpc_id = aws_vpc.vpc.id

  tags = {
    Name    = "${var.project}-${var.environment}-public-rt"
    Project = var.project
    Env     = var.environment
    Type    = "public"
  }
}

resource "aws_route_table_association" "public_rt_1a" {
  route_table_id = aws_route_table.public_rt.id
  subnet_id      = aws_subnet.public_subnet_1a.id
}

resource "aws_route_table_association" "public_rt_1c" {
  route_table_id = aws_route_table.public_rt.id
  subnet_id      = aws_subnet.public_subnet_1c.id
}

resource "aws_route_table" "private_rt" {
  vpc_id = aws_vpc.vpc.id

  tags = {
    Name    = "${var.project}-${var.environment}-private-rt"
    Project = var.project
    Env     = var.environment
    Type    = "private"
  }
}

resource "aws_route_table_association" "private_rt_1a" {
  route_table_id = aws_route_table.private_rt.id
  subnet_id      = aws_subnet.private_subnet_1a.id
}

resource "aws_route_table_association" "private_rt_1c" {
  route_table_id = aws_route_table.private_rt.id
  subnet_id      = aws_subnet.private_subnet_1c.id
}


# ---------------------------------------------
# Internet Gateway
# ---------------------------------------------
resource "aws_internet_gateway" "igw" {
  vpc_id = aws_vpc.vpc.id

  tags = {
    Name    = "${var.project}-${var.environment}-igw"
    Project = var.project
    Env     = var.environment
  }
}

resource "aws_route" "public_rt_igw_r" {
  route_table_id         = aws_route_table.public_rt.id
  destination_cidr_block = "0.0.0.0/0"
  gateway_id             = aws_internet_gateway.igw.id
}

```

# terraform.tfvars
```
Name    = "${var.project}-${var.environment}-vpc"
# ---------------------------------------------
# Variables
# ---------------------------------------------
variable "project" {
  type = string
}

variable "environment" {
  type = string
}

project     = "tastylog"
environment = "dev"
```

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
