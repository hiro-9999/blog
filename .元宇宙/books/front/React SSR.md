### React SSR
https://zenn.dev/mast1ff/articles/b7e36c9f981e19

## ok http://fe.ssr-fc.com
https://github.com/zhangyuang/ssr

https://www.digitalocean.com/community/tutorials/react-server-side-rendering-ja

サーバー側レンダリング（SSR）は、サーバー上のクライアント側_シングルページアプリケーション_（SPA）をレンダリングし、完全にレンダリングされたページをクライアントに送信するための一般的な手法です。これにより、動的コンポーネントを静的HTMLマークアップとして提供できます。

https://github.com/reactjs/server-components-demo

## ReactDOMServer オブジェクトはコンポーネントを静的なマークアップとして変換できるようにします。これは、一般的に Node サーバで使われます。
https://ja.reactjs.org/docs/react-dom-server.html

https://tech-wiki.online/jp/react-server-side-rendering.html

● 采用 Next.js/egg-react-ssr 写法，实现客户端渲染和服务端渲染统一
● 采用 Umi SSR 构建，生成独立 umi.server.js 做法，做到渲染
● 采用 Umi 做法，内置 Webpack 和 React，简化开发，只有在构建时区分客
户端渲染和服务端渲染，做好和 CDN 如何搭档，做好优雅降级，保证稳定性
● 结合 FaaS API，做好渲染集成。 为了演示 Serverless 下渲染层实现原理， 下面会进行简要说明。在 Serverless 云函数里，一般会有 server.yml 作为配
置文件，这里以 lamda 为例子。

以上做法，都是我们基于 https://github.com/ykfe/egg-react-ssr 提炼出来的 实践，这些都是 SSR-spec 的基础。
