# IAM ロールと ARN
https://docs.aws.amazon.com/ja_jp/IAM/latest/UserGuide/reference_identifiers.html

大多数资源都有易记名称 (例如，名为 Bob 的用户或名为 Developers 的组)。不过，权限策略语言要求您使用以下 Amazon 资源名称 (ARN) 格式指定资源。

arn:partition:service:region:account:resource
其中：

partition 用于标识资源所在的分区。对于标准 AWS 区域，分区是 aws。如果资源位于其他分区，则分区是 aws-partitionname。例如，中国（北京） 区域中的资源的分区为 aws-cn。您不能在不同分区的账户之间委派访问权限。

service 标识 AWS 产品。对于 IAM 资源，它始终是 iam。

region 是资源所在的区域。对于 IAM 资源，它始终保持空白。

account 是不带连字符的 AWS 账户 ID（例如，123456789012）。

resource 是按名称标识特定资源的部分。
