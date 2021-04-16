https://developers.google.com/search/docs/guides/dynamic-rendering

对于实际操作方法，请参考我们新推出的使用 Rendertron 实现动态呈现 Codelab。此 Codelab 会逐步引导您使用 Rendertron（一种基于无头 Chromium 的开源解决方案）实现动态呈现。
安装并配置动态呈现器，以便将内容转换为更便于抓取工具使用的静态 HTML。一些常见的动态呈现器包括 Puppeteer、Rendertron 和 prerender.io。
选择您认为应该接收您的静态 HTML 的用户代理，并参考具体的配置详情，了解如何更新或添加用户代理。以下是 Rendertron 中间件中常见用户代理的列表示例：

export const botUserAgents = [
  'googlebot',
  'google-structured-data-testing-tool',
  'bingbot',
  'linkedinbot',
  'mediapartners-google',
];
如果预呈现会拖慢服务器速度，或者预呈现请求非常多，请考虑为预呈现的内容实现缓存功能，或验证相应请求是否来自合法的抓取工具。
确定用户代理需要桌面版内容还是移动版内容。使用动态提供内容，以便根据情况提供桌面版本或移动版本。请参阅以下示例，了解配置如何确定用户代理需要桌面版内容还是移动版内容：

isPrerenderedUA = userAgent.matches(botUserAgents)
isMobileUA = userAgent.matches(['mobile', 'android'])


if (!isPrerenderedUA) {
} else {
  servePreRendered(isMobileUA)
}
在此示例中，使用 if (!isPrerenderedUA) {...} 提供常规的客户端呈现内容。如果需要，请使用 else { servePreRendered(isMobileUA)} 提供移动版本。
将服务器配置为向您选择的抓取工具提供静态 HTML。您可以通过多种方法完成此项配置，具体取决于您的技术。以下是一些示例：
将来自抓取工具的请求重定向到动态呈现器。
在部署过程中进行预呈现，并使服务器向抓取工具提供静态 HTML。
将动态呈现机制内置到自定义服务器代码中。
将来自预呈现服务的静态内容提供给抓取工具。
为服务器使用中间件（例如，rendertron 中间件）。
