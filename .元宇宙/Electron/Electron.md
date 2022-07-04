https://www.electronjs.org/


## [Electron] macOS用アプリに「コード署名」と「公証」を行う

https://blog.katsubemakito.net/nodejs/electron/codesigning-macos


## エレクトロン Electron
https://ics.media/entry/7298/


https://www.twilio.com/blog/an-introduction-to-building-desktop-applications-with-electron-jp

# sample
https://github.com/electron-userland/electron-forge

# buildVersion
https://stackoverflow.com/questions/59057187/how-to-change-file-version-product-and-copy-right-values-for-exe-generated-thr

To achieve what you're asking for, you can for instance add the following options to the relevant electron-packager command in your package.json file:

--buildVersion='Build 42'
--appVersion='Version 3.14'
--appCopyright='My Own Private Copyright'
