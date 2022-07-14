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
