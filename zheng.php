Listen 443

SSLStrictSNIVHostCheck off

SSLCipherSuite AESGCM:ALL:!DH:!EXPORT:!RC4:+HIGH:!MEDIUM:!LOW:!aNULL:!eNULL

SSLProtocol all -SSLv2 -SSLv3

<VirtualHost *:443>

    DocumentRoot "D:\phpStudy\WWW\bbs"（网站根目录路径）

    ServerName www.yuming.com（更换成自己的域名）

    ServerAlias yuming.com（更换成自己的域名）

  <Directory "D:\phpStudy\WWW\bbs">（网站根目录路径）

      Options FollowSymLinks ExecCGI

      AllowOverride All

      Order allow,deny

      Allow from all

      Require all granted

  </Directory>

SSLEngine on

SSLCertificateFile "D:\phpStudy\Apache\conf\ssl\XXX.cer"（证书路径）

SSLCertificateKeyFile "D:\phpStudy\Apache\conf\ssl\XXX.key"（证书路径）

</VirtualHost>
