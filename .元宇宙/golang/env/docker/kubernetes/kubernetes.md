https://kubernetes.io

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
 
 

 
 
 
 
 
