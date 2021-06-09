# SuperTools
## Procedimientos para una correcta visualizacion del sistema

1.- Lo primero que haremos, será tener descargado e instalado xampp, si aun no lo tenemos podremos hacerlo a travez de este link: https://www.apachefriends.org/es/download.html Aqui buscaremos la version de nuestra preferencia.

2.- ahora haremos la configuracion para que nuestro proyecto sea visible;
-entraremos a nuestra carpeta "disco local/xampp/htdocs" y haremos una carpeta con el nombre de nuestra preferencia y la terminacion ".com", en mi caso fue "example.com".

- Ahora nos dirigiremos a la carpeta "disco local/xampp/apache/conf/extra" y buscaremos el archivo "httpd-vhosts", lo abriremos para editarlo, ya dentro del archivo nos iremos a la parte de abajo y pegaremos lo siguiente:
<VirtualHost *:80>
    ServerAdmin example.com
    DocumentRoot "C:/xampp/htdocs/example.com/public"
    ServerName example.com
    ErrorLog "logs/example.com-error.log"
    CustomLog "logs/example.com-access.log" common
    <Directory "C:/xampp/htdocs/example.com/public">
      Options All
      AllowOverride All
      Require all granted
    </Directory>
</VirtualHost>
(En mi caso fue example.com, pero necesitan poner el nombre que eligieron para su host)

-Ahora nos pasaremos a la carpeta disco local/windows/system32/

