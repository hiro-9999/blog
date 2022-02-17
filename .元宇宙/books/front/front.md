## 在本身的 imgcook 链路里，体验相对来说不是特别好，要求大家安 装 sketch 或者 Photoshop


### 函数即服务(Functions as a Service，简写为 FaaS)做 API 开发相关是非常简 单的。
客户端 渲染
client-side render
简写 描述
CSR 通过React、Rax编写的组件，打包构建后，以html文件形式分 发到CDN上，不需要Node.js支持

服务器 端渲染 Server-side render
SSR
通过React、Rax编写的组件，打包构建后，分别生成server bundle和client bundle，其中server bundle由Node.js服务端 写入到浏览器，client bundle分发到CDN上，采用混搭的写入 渲染方式，来提高首屏渲染效率。


组件即 函数 Component as a function
Caaf
组件即函数，在Serverless领域以函数为核心，在渲染也是已函数为核心，做到资源与函数分类，实现渲染层独立，为开发提供更大家便利。

在Serverless时代，基于 函数即服务(Functions as a Service，简写为 FaaS)做 API 开发相关是非常简单的:1)无服务， 不需要管运维工作;2)代码只关系函数粒度，面向 API 变成，降低构建复杂度;3)可扩展。
