## .scpt ->save
https://www.softantenna.com/wp/tips/macos-catalina-apple-java-6/

set theDMG to choose file with prompt "Please select javaforosx.dmg:" of type {"dmg"}
do shell script "hdiutil mount " & quoted form of POSIX path of theDMG
do shell script "pkgutil --expand /Volumes/Java\\ for\\ macOS\\ 2017-001/JavaForOSX.pkg ~/tmp"
do shell script "hdiutil unmount /Volumes/Java\\ for\\ macOS\\ 2017-001/"
do shell script "sed -i '' 's/return false/return true/g' ~/tmp/Distribution"
do shell script "pkgutil --flatten ~/tmp ~/Desktop/Java.pkg"
do shell script "rm -rf ~/tmp"
display dialog "Modified Java.pkg saved on desktop" buttons {"Ok"}

## mac
files broken，「壊れているため開けません。 ゴミ箱に入れる必要があります。」
https://qiita.com/daddygongon/items/3321b4f6e1aa213c75e8

xattr -c **.app

sudo spctl --master-disable
