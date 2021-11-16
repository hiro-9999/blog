# networksetup -getinfo Wi-Fi | grep "^IP address:"


# ipconfig getifaddr en0
ifconfig en0 | awk '/inet / { print $2 }'

https://yu8mada.com/2018/07/14/how-to-find-my-private-ip-address-in-macos/


#  Mac 製品の MAC アドレスを確認
ifconfig en0 ether

メニューバーの Wi-Fi アイコンを option をホールドしながらクリックすると, Interface Name の下に Address というそのインターフェースの MAC アドレスが表示されます:
