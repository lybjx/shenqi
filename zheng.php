Listen 443

<VirtualHost *:443>

    DocumentRoot "C:\myphp_www\PHPTutorial\WWW"

    ServerName www.test.com

    ServerAlias test.com

    SSLEngine on

    SSLProtocol TLSv1 TLSv1.1 TLSv1.2

    SSLCipherSuite HIGH:MEDIUM:!aNULL:!MD5

    SSLCertificateFile "C:\myphp_www\PHPTutorial\Apache\cert\2_www.test.com.crt"

    SSLCertificateKeyFile "C:\myphp_www\PHPTutorial\Apache\cert\3_www.test.com.key"

    SSLCertificateChainFile "C:\myphp_www\PHPTutorial\Apache\cert\1_root_bundle.crt"

<Directory "C:\myphp_www\PHPTutorial\WWW">

      Options +Indexes +FollowSymLinks +ExecCGI

      AllowOverride All

      Order allow,deny

      Allow from all

      Require all granted

  </Directory>

</VirtualHost>
