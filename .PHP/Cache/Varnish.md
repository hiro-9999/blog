# Getting Started with Varnish Cache
https://www.journaldev.com/29833/install-varnish-cache-centos-7

# How to Install Varnish Cache with Apache on CentOS 7
https://www.howtoforge.com/tutorial/how-to-install-varnish-with-nginx-on-centos-7/
```java
Install EPEL repository using the following command.

yum -y install epel-release
Now install Varnish from the EPEL repository using yum command below.

yum -y install varnish
After the installation is complete, start Varnish and add it to launch at system boot using the systemctl commands below.
systemctl start varnish
systemctl enable varnish
By default, Varnish will use port 6081 and 6082. Check it using the netstat command below.

netstat -plntu
```
