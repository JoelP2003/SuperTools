# SuperTools
## Procedimientos para una correcta visualizacion del sistema

1.- Lo primero que haremos, será tener descargado e instalado xampp, si aun no lo tenemos podremos hacerlo a travez de este link: https://www.apachefriends.org/es/download.html Aqui buscaremos la version de nuestra preferencia.

2.- Entraremos a nuestra carpeta "disco local/xampp/htdocs" y haremos una carpeta con el nombre de nuestra preferencia y la terminacion ".com", en mi caso fue "example.com", descargaremos las carpetas y archivos de este repositorio y las colocaremos dentro de ella

3.- Ahora haremos la configuracion para que nuestro proyecto sea visible;

- Nos dirigiremos a la carpeta "disco local/xampp/apache/conf/extra" y buscaremos el archivo "httpd-vhosts", lo abriremos para editarlo, ya dentro del archivo nos iremos a la parte de abajo y pegaremos lo siguiente:

<VirtualHost *:80> <br />
    ServerAdmin example.com <br />
    DocumentRoot "C:/xampp/htdocs/example.com/public" <br />
    ServerName example.com <br />
    ErrorLog "logs/example.com-error.log" <br />
    CustomLog "logs/example.com-access.log" common <br />
    <Directory "C:/xampp/htdocs/example.com/public"> <br />
      Options All <br />
      AllowOverride All <br />
      Require all granted <br />
    </Directory> <br />
</VirtualHost>
(En mi caso fue example.com, pero necesitan poner el nombre que eligieron para su host)

- Ahora nos pasaremos a la carpeta "disco local/windows/system32/drivers/etc" y avriremos el archivo "hosts" y pegaremos la siguiente linea:

127.0.0.1 example.com

4.- Reiniciamos el panel de xampp.

5.- Abrimos nuestro navegador y en la barra de busqueda escribimos el nombre que le asignamos a nuestra carpeta y si todo lo hicimos correctamente, debería abrir el archivo ya con nuestra pagina.

## Resumen del proyecto
SuperTools es un proyecto de una página web, que como su nombre lo dice, es acerca de herramientas, es un sistema de altas bajas y consultas, y, además, será desarrollado a través de código html, php y apoyado por un servidor de xampp y mySQL que ya viene instalado con este. </br>
¿Por qué y para qué se va a hacer este proyecto?
Pienso que este tema de “desarrollar un sitio web” dirigido a las pymes es muy importante ya que, al día de hoy estas pueden ampliar sus catálogos de productos y también su “cobertura” en el mercado. </br>
¿Qué posibilidades existen para este proyecto?
Las posibilidades en mi parecer en México, son muy altas ya que todos nosotros buscamos realizar el trabajo por nuestra propia cuenta, que llamar a alguien para que lo haga por nosotros, y, además, esas herramientas las podemos ocupar para otra situación que sea necesaria, o no tanto. </br>



