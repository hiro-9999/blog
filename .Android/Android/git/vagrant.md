## centos67
vagrant box add centos67 https://github.com/CommanderK5/packer-centos-template/releases/download/0.6.7/vagrant-centos-6.7.box

https://qiita.com/NAZA/items/adb849e795861d81a520


## VagrantでCentOS6.7環境構築
https://qiita.com/NAZA/items/9fdc1774e4dda0acb617
yum update
rpm -ivh http://ftp-srv2.kddilabs.jp/Linux/distributions/fedora/epel/6/x86_64/epel-release-6-8.noarch.rpm
インストールするもの
Apache
php 5.6
mysql5.6


  cat /etc/centos-relea
yum search netcat

## vagrant box add bento/centos-6.7 https://atlas.hashicorp.com/bento/boxes/centos-6.7
https://qiita.com/tsnb/items/47bca690e4a722653bc1

https://go-journey.club/archives/3766

yum update net-tools
vagrant box remove centos65
sudo yum clean all

sudo rpm -ivh http://dl.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-8.noarch.rpm
sudo sed -i -e "s/enabled=1/enabled=0/g" /etc/yum.repos.d/epel.repo
## vagrant plugin install vagrant-vbguest
sudo !!
//install  wget// 
sudo yum install wget
install php
//yum -y install nmap-ncat

https://www.task-notes.com/entry/20150714/1436842800
 vagrant vbguest --do install
 vagrant vbguest --do start   # 起動
 sudo yum install --enablerepo=remi,remi-php65 php
 
 https://qiita.com/tomk79/items/afa1392679e328c30a78
sudo yum -y install git
https://qiita.com/AkihikoIkeda/items/6e886f74a934e0ddfcab

sudo yum -y install git apt
vagrant up

## VagrantでCentOS7をインストール
https://qiita.com/RyochanUedasan/items/b1ff13bc39913cb5b561

$ VBoxManage -v
5.0.20r106931
$ vagrant -v
Vagrant 1.7.4

sudo rpm -Uvh --nosignature http://rpms.famillecollet.com/enterprise/remi-release-6.rpm

config.vm.provision :shell, run: “always”  do |s|
    s.path = “./scripts/install.sh”
  end

$ mkdir vagrant_centos7
$ cd vagrant_centos7

# vagrant box add [vagrantのbox名] [boxのURL]
# ↓はどこのディレクトリで実行してもOK
$ vagrant box add centos7.1 https://github.com/CommanderK5/packer-centos-template/releases/download/0.7.1/vagrant-centos-7.1.box
# ↓は仮想サーバーを起動させたいディレクトリで実行
$ vagrant init

# これから、↓は仮想サーバーを起動させたいディレクトリで実行
# vagrant init [↑で指定したvagrantのbox名]
$ vagrant init CentOS7.1 # 初期化する（Vagrantfileを生成する）
$ vagrant up # 起動する
$ vagrant ssh # 接続する
[vagrant@localhost ~]$ # 仮想サーバーに入った
