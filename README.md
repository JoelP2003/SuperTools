# SuperTools
## Resumen del proyecto
SuperTools es un proyecto de una página web, que como su nombre lo dice, es acerca de herramientas, es un sistema de altas bajas y consultas, y, además, será desarrollado a través de código html, php y apoyado por un servidor de xampp y mySQL que ya viene instalado con este.

## Descarga y configuración del sistema

- Lo primero que haremos, será tener descargado e instalado xampp, si aun no lo tenemos podremos hacerlo a travez de este link: https://www.apachefriends.org/es/download.html Aqui buscaremos la version de nuestra preferencia.

- Entraremos a nuestra carpeta "disco local/xampp/htdocs" y haremos una carpeta con el nombre de nuestra preferencia y la terminacion ".com", en mi caso fue "example.com", descargaremos las carpetas y archivos de este repositorio y las colocaremos dentro de ella

- Ahora haremos la configuracion para que nuestro proyecto sea visible;

- - Nos dirigiremos a la carpeta "disco local/xampp/apache/conf/extra" y buscaremos el archivo "httpd-vhosts", lo abriremos para editarlo, ya dentro del archivo nos iremos a la parte de abajo y pegaremos lo siguiente:

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

- - Ahora nos pasaremos a la carpeta "disco local/windows/system32/drivers/etc" y avriremos el archivo "hosts" y pegaremos la siguiente linea:

127.0.0.1 example.com

- Reiniciamos el panel de xampp.

- Abrimos nuestro navegador y en la barra de busqueda escribimos el nombre que le asignamos a nuestra carpeta y si todo lo hicimos correctamente, debería abrir el archivo ya con nuestra pagina.

## Especificaciones
- Lenguaje de programación: PHP.
- Base de datos: MySQL.
- Servidor: Apache.
- FrontEnd: HTML + Bootstrap
- Sin framework BackEnd.

## Especificaciones 

- Altas: Puedes agregar productos nuevos a la base de datos cada vez que sea necesario.
- Bajas: Eliminar un producto no será un problema, solo da clic a un botón y el sistema lo eliminará automáticamente.
- Consultas: Te permite hacer búsquedas dentro del sistema para encontrar un producto en específico.
- Cambios: Te permite alterar los datos introducidos anteriormente de un producto, y actualizarlo de acuerdo a tu preferencia.

## Autor
- Joel Peña Romero

## License
- MIT
