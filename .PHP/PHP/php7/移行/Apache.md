The Apache httpd web server configuration logic is not checking whether a PHP exists before loading it. That causes "Primary script unknown" errors. 
To avoid this and show a normal HTTP 404 error instead, you need to edit two files:
```rub
/opt/bitnami/apps/moodle/conf/httpd-app.conf: Change the lines below:

<FilesMatch \.php$>
  SetHandler "proxy:fcgi://moodle-fpm"
</FilesMatch>
By this:
<FilesMatch \.php$>
  <If "-f %{REQUEST_FILENAME}">
    SetHandler "proxy:fcgi://moodle-fpm"
  </If>
</FilesMatch>

/opt/bitnami/apache2/conf/php-fpm-apache.conf: Change the lines below:
Copy
<FilesMatch \.php$>
  SetHandler "proxy:fcgi://moodle-fpm"
</FilesMatch>

By this:
<FilesMatch \.php$>
  <If "-f %{REQUEST_FILENAME}">
    SetHandler "proxy:fcgi://www-fpm"
  </If>
</FilesMatch>

```
