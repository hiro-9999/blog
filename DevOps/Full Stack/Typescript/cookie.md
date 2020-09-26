getcookie('lg')
# i18next
https://react.i18next.com/legacy-v9/step-by-step-guide

https://github.com/i18next/i18next/blob/master/CHANGELOG.md


https://www.typescriptlang.org/


https://gist.github.com/joduplessis/7b3b4340353760e945f972a69e855d11
```
function getcookie(name = '') {
    let cookies = document.cookie;
    let cookiestore = {};
    
    cookies = cookies.split(";");
    
    if (cookies[0] == "" && cookies[0][0] == undefined) {
        return undefined;
    }
    
    cookies.forEach(function(cookie) {
        cookie = cookie.split(/=(.+)/);
        if (cookie[0].substr(0, 1) == ' ') {
            cookie[0] = cookie[0].substr(1);
        }
        cookiestore[cookie[0]] = cookie[1];
    });
    
    return (name !== '' ? cookiestore[name] : cookiestore);
}

//cookie-typescript-utils.ts
function getCookie(name: string) {
    const value = "; " + document.cookie;
    const parts = value.split("; " + name + "=");

    if (parts.length == 2) {
        // @ts-ignore
        return parts.pop().split(";").shift();
    }
    return null;
}

getCookie(`lg`);
```
https://gist.github.com/joduplessis/7b3b4340353760e945f972a69e855d11

https://stackoverflow.com/questions/10730362/get-cookie-by-name

# typescriptで特定ファイルのコンパイルエラーだけdisableする
https://dream-yt.github.io/post/typescript-ts-ignore/

https://mizchi.dev/202006232052-rewrite-to-ts-with-expect-error

https://devblogs.microsoft.com/typescript/announcing-typescript-3-9-beta/

# Client-side Authentication the Right Way (Cookies vs. Local Storage)
https://www.taniarascia.com/full-stack-cookies-localstorage-react-express/
```
Method	Vulnerability
Local storage	XSS - cross-site scripting
Cookies	CSRF - cross-site request forgery
An XSS vulnerability enables an attacker to inject JavaScript into a site.
A CSRF vulnerability enables an attacker to perform actions on a website via an authenticated user.

Using HTTP cookies in Express

In order to use cookies in Express, you use the cookie-parser module.

Parse cookies

const cookieParser = require('cookie-parser')

app.use(cookieParser())
```


# LanguageDetector
https://github.com/i18next/i18next/issues/918

https://github.com/i18next/i18next-browser-languageDetector
