https://kubernetes.io

https://kubernetes.io/docs/reference/

## Kubernetes in Action中文版

多节点的Kubernetes集群并不是一项简单的工作，特别是如果你不精通Linux和网络管理的话。
一个适当的Kubernetes安装需要包含多个物理或虚拟机，并需要正确地设置网络，
以便在Kubernetes集群内运行的所有容器都可以在相同的扁平网络环境内相互连通。


### Google Kubernetes Engine（GKE）
https://cloud.google.com/kubernetes-engine

另一个选择是在亚马逊的AWS（Amazon Web Services）上安装Kubernetes。为此，可以查看 kops 工具，它是在前面一段提到的 kubeadm 基础之上构建的，可以在http://github.com/kubernetes/kops中找到。它帮助你在AWS上部署生产级、高可用的Kubernetes集群，并最终会支持其他平台（Google Kubernetes Engine、VMware、vSphere等）。


## Minikube代码仓库（http://github.com/kubernetes/minikube），按照说明来安装它。

## kubectl CLI客户端
 curl -LO "https://dl.k8s.io/release/$(curl -L -s https://dl.k8s.io/release/stable.txt)/bin/darwin/arm64/kubectl"
 
 https://kubernetes.io/docs/tasks/tools/install-kubectl-macos/
 
 ### 要验证集群是否正常工作，可以使用以下所示的 kubectl cluster-info命令。
 
 可以运行 minikube ssh 登录到Minikube VM并从内部探索它。例如，可以查看在节点上运行的进程。


kubectl get 命令可以列出各种Kubernetes对象。你将会经常使用到它，但它通常只会显示对象最基本的信息。

提示 可以使用 gcloud compute ssh <node-name> 登录到其中一个节点，查看节点上运行了什么。

查看对象的更多信息

要查看关于对象的更详细的信息，可以使用 kubectl describe 命令，它显示了更多信息：
 ### 请将initialDelaySeconds属性添加到存活探针的配置中，如下面的代码清单所示。

代码清单4.3 具有初始延迟的存活探针：kubia-liveness-probe-initial-delay.yaml
 
 label selector（标签选择器），用于确定ReplicationController作用域中有哪些pod

replica count（副本个数），指定应运行的pod数量

pod template（pod模板），用于创建新的pod副本
 
但这次你的做法会不一样。

通过编辑定义来缩放ReplicationController

不使用kubectl scale命令，而是通过以声明的形式编辑ReplicationController的定义对其进行缩放：


### 当文本编辑器打开时，找到spec.replicas字段并将其值更改为10，如下面的代码清单所示。

代码清单4.7 运行kubectl edit在文本编辑器中编辑RC
 
 ### 当使用kubectl delete删除ReplicationController时，可以通过给命令增加--cascade=false选项来保持pod的运行。马上试试看
kubectl delete rc kubie --cascade=false
 
 
  ### ～/.bashrc 或类似的文件中：
alias k= kubectl

### kubectl run kubia  --image=luksa/kubia --port=8080 --generator=run/v1
 
 --image=luksa/kubia 显示的是指定要运行的容器镜像，--port=8080 选项告诉Kubernetes应用正在监听8080端口。最后一个标志（--generator）需要解释一下，通常并不会使用到它，它让Kubernetes创建一个ReplicationController，而不是Deployment。稍后你将在本章中了解到什么是ReplicationController，但是直到第9章才会介绍Deployment，所以不会在这里创建Deployment。
 
 ### kubectl get pods
 
 比如pod，它也只能从集群内部访问。通过创建 LoadBalancer 类型的服务，将创建一个外部的负载均衡，可以通过负载均衡的公共IP访问pod。


列出服务

expose 命令的输出中提到一个名为kubian-http 的服务。服务是类似于pod和Node的对象，因此可以通过运行 kubectl get services 命令查看新创建的服务对象，如下面的代码清单所示。
 
 
 ### kubectl expose rc kubie --type=LoadBalsncer --name kubia-http
 kubectl get services
 
 kubectl get svc
 #### 注意 我们这里用的是 replicationcontroller 的缩写 rc。大多数资源类型都有这样的缩写，所以不必输入全名（例如，pods 的缩写是 po,service 的缩写是 svc，等等）。
 curl 104.155.74.57:8080
 
 提示 使用Minikube的时候，可以运行 minikube service kubia-http获取可以访问服务的IP和端口
 ### minikube service kubia-http
 
会发现应用将pod名称作为它的主机名。如前所述，每个pod都像一个独立的机器，具有自己的IP地址和主机名。
 
 新的pod与替换它的pod具有不同的IP地址。这就是需要服务的地方——解决不断变化的pod IP地址的问题，以及在一个固定的IP和端口对上对外暴露多个pod。

当一个服务被创建时，它会得到一个静态的IP，在服务的生命周期中这个IP不会发生改变。客户端应该通过固定IP地址连接到服务，而不是直接连接pod。服务会确保其中一个pod接收连接，而不关心pod当前运行在哪里（以及它的IP地址是什么）。
 
### pod由一个ReplicationController管理。让我们来查看 kubectl get 命令：
 kubectl get replicationcontrollers
 
 不是告诉Kubernetes应该执行什么操作，而是声明性地改变系统的期望状态，并让Kubernetes检查当前的状态是否与期望的状态一致。在整个Kubernetes世界中都是这样的。
 ## kubectl sclae rc kubia --replicas=3
 kubectl get rc
 
 kubectl get pods
 
 #### 记住，应用本身需要支持水平伸缩。Kubernetes并不会让你的应用变得可扩展，它只是让应用的扩容或缩容变得简单。
 但是可以使用-o wide 选项请求显示其他列。在列出pod时，该选项显示pod的IP和所运行的节点：
 
 ### kubectl get pods -o wide
 使用kubectl describe查看pod的其他细节
 
 kubectl describe pod kubia-**
 
 ### 如果你正在使用Google Kubernetes Engine，可以通过 kubectl clusterinfo 命令找到dashboard的URL：
 kubectl cluster-info | grep dashboard
 
 在Minikube和GKE中访问基于web的Kubernetes dashboard。
 
 ### 要打开使用Minikube的Kubernetes集群的dashboard，请运行以下命令：
 minikube dashboard
 
  ## 已部署pod的完整YAML
kubectl get po kubia-** -o yaml
 
 metadata 包括名称、命名空间、标签和关于该容器的其他信息。

spec包含pod内容的实际说明，例如pod的容器、卷和其他数据。

status 包含运行中的pod的当前信息，例如pod所处的条件、每个容器的描述和状态，以及内部IP和其他基本信息。
 
 kubectl explain命令
 ### kubectl explain pods
 kubectl explain pods.spec
 
 ### kubectl create-f命令用于从YAML或JSON文件创建任何资源（不只是pod）。
 kubectl create -f kubia-manual.yaml
 
 kubectl get po kubia-manual -o yaml
 
  kubectl get po kubia-manual -o json
 
 kubectl get pods
 
 ### 并使用docker logs命令查看其日志，但Kubernetes提供了一种更为简单的方法。
 docker logs <container id>
 
kubectl logs kubia-manual
 
使用kubectl logs命令获取pod日志
 
 在运行kubectl logs命令时则必须通过包含-c <容器名称>选项来显式指定容器名称。在kubia-manual pod中，我们将容器的名称设置为kubia，所以如果该pod中有其他容器，可以通过如下命令获取其日志：
 ### kubectl logs kubia-manual -c kubia
 
 kubectl port-forward kubia-manual 8888:8080
 ### 通过运行在localhost:8888上的kubectl portforward代理，可以使用curl 命令向pod发送一个HTTP请求
 
 ### 使用pod标签组织微服务架构中的pod 此时每个pod都标有两个标签：
metadata.labels 部分已经包含了creation_method=manual 和env=prod标签。现在来创建该pod：
 
app，它指定pod属于哪个应用、组件或微服务。

rel，它显示在pod中运行的应用程序版本是stable、beta还是canary。
 ## --showlabels选项来查看：
 kubectl get po --showlabels
 
  kubectl get po -L creation_method,env
 
## 现在，将kubia-manual-v2 pod上的env=prod标签更改为env=debug，以演示现有标签也可以被更改。
注意 在更改现有标签时，需要使用--overwrite选项。
 
new cerate: kubectl label po kubia-manual creation_method=manual
 
change:   kubectl label po kubia-manual env=dubug --overwrite
 
#### creation_method!=manual 选择带有creation_method标签，并且值不等于manual的pod
 kubectl get po -l '!env'

env in（prod,devel）选择带有env标签且值为prod或devel的pod

env notin（prod,devel）选择带有env标签，但其值不是prod或devel的pod
 
 
 ### kubectl label  node ** gpu=true
 kubectl get -l nodes gpu=true
 
 我们只是在spec部分添加了一个nodeSelector字段。当我们创建该pod时，调度器将只在包含标签gpu=true的节点中选择（在我们的例子中，只有一个这样的节点）。
 
 
 # kubectl get ns
 命名空间的pod：
 
 kubectl get po --namespace **
 
 or
 
 kubectl get po --n **
 
###  kubectl create namespace命令创建命名空间
 
 删除kubia-gpu pod：
### kubectl delete po kubia-gpu
 删除多个pod（例如：kubectl delete po pod1 pod2）。

关于标签选择器的知识来停止kubia-manual和kubia-manual-v2 pod。这两个pod都包含标签creation_method=manual，因此可以通过使用一个标签选择器来删除它们：
 ### kubectl delete po -l creation_method=manual
 
 
 可以简单地删除整个命名空间（pod将会伴随命名空间自动删除）。现在使用以下命令删除custom-namespace：
 
 kubectl delete ns **
 
 #### 使用--all选项告诉Kubernetes删除当前命名空间中的所有pod：
  kubectl delete po --all
 
 删除资源时，kubectl将打印它删除的每个资源的名称。在列表中，可以看到在第2章中创建的名为kubia的ReplicationController和名为kubia-http的Service。

注意 kubectl delete all--all命令也会删除名为kubernetes的Service，但它应该会在几分钟后自动重新创建。

 Kubernetes可以通过存活探针（liveness probe）检查容器是否还在运行。
 
 ## ReplicaSet
 
 通过在pod配置中设置activeDeadlineSeconds属性，可以限制pod的时间。如果pod运行时间超过此时间，系统将尝试终止pod，并将Job标记为失败。

注意 通过指定Job manifest中的spec.backoffLimit字段，可以配置Job在被标记为失败之前可以重试的次数。如果你没有明确指定它，则默认为6。
 
 ### Kubernetes中的cron任务通过创建CronJob资源进行配置。运行任务的时间表以知名的cron格式指定，所以如果你熟悉常规cron任务，你将在几秒钟内了解Kubernetes的CronJob。
 你希望每15分钟运行一次任务因此schedule字段的值应该是＂0,15,30,45****＂这意味着每小时的0、15、30和45分钟（第一个星号），每月的每一天（第二个星号），每月（第三个星号）和每周的每一天（第四个星号）。

相反，如果你希望每隔30分钟运行一次，但仅在每月的第一天运行，则应将计划设置为＂0,30 * 1 * *＂，并且如果你希望它每个星期天的3AM运行，将它设置为＂0 3 * * 0＂（最后一个零代表星期天）。
 
 
 
 
 
 
 
 
 
 
 
