<VirtualHost *:80>
    DocumentRoot "E:/wamp/www/TP509/public"   //这里是我的虚拟域名指向的地址
    ServerName www.zfk.com  //虚拟域名
    <Directory "E:/wamp/www/TP509/public">
         Options Indexes FollowSymLinks
         AllowOverride All   //有需要修改的就修改
         Order allow,deny
         Allow from all
    </Directory>    
</VirtualHost>
