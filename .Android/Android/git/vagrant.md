## vagrant plugin install vagrant-vbguest
https://www.task-notes.com/entry/20150714/1436842800
 vagrant vbguest --do install
 vagrant vbguest --do start   # 起動
 
 https://qiita.com/tomk79/items/afa1392679e328c30a78

vagrant up

## VagrantでCentOS7をインストール
https://qiita.com/RyochanUedasan/items/b1ff13bc39913cb5b561

$ VBoxManage -v
5.0.20r106931
$ vagrant -v
Vagrant 1.7.4


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
