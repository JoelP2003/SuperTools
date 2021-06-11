# SuperTools
## ¿Que es SuperTools?
SuperTools es un proyecto de una página web, que como su nombre lo dice, es acerca de herramientas, es un sistema de altas bajas y consultas, y, además, será desarrollado a través de código html, php y apoyado por un servidor de xampp y mySQL que ya viene instalado con este.

## Descarga y configuración del sistema

- Lo primero que haremos, será tener descargado e instalado xampp, si aun no lo tenemos podremos hacerlo a travez de este link: https://www.apachefriends.org/es/download.html Aqui buscaremos la version de nuestra preferencia.

- Entraremos a nuestra carpeta "disco local/xampp/htdocs" y crearemos una carpeta con el nombre "example.com" (Este nombre de carpeta es opcional, pero preferentemente colocar este), descargaremos las carpetas y archivos de este repositorio y las colocaremos dentro de ella, dentro de la carpeta includes hay un archivo llamado "constants" este lo modificaremos dependiendo los valores de nuestra base de datos.

- Ahora haremos la configuracion para que nuestro proyecto sea visible;

1.- Nos dirigiremos a la carpeta "disco local/xampp/apache/conf/extra" y buscaremos el archivo "httpd-vhosts", lo abriremos para editarlo, ya dentro del archivo nos iremos a la parte de abajo y pegaremos lo siguiente:

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

2.- Ahora nos pasaremos a la carpeta "disco local/windows/system32/drivers/etc" y abriremos el archivo "hosts" y pegaremos la siguiente linea en la parte inferior:

127.0.0.1 example.com

- Reiniciamos el panel de xampp.

- Abrimos nuestro navegador y en la barra de busqueda escribimos el nombre que le asignamos a nuestra carpeta y si todo lo hicimos correctamente, debería abrir el archivo ya con nuestra pagina, pero notaremos algo, no hay productos.

- Para  ver los productos tenemos que ir a nuestro navegador e ingresar al "http://localhost/phpmyadmin/sql.php" ahí crearemos una base de datos llamada "almacen" y dentro de ella una tabla llamada "herramienta" (en este caso el nombre de la base y la tabla pueden ser cambiados, pero se recomienda que se usen los predeterminados), ahi tenemos que insertar el nombre, precio, marca, material, stock y una direccion de imagen de cada producto, despues de insertar los articulos actualizaremos y ya se podrá observar el catálogo en la página.

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

## Base de datos
Para poder completar este proyecto ocupamos la ayuda de una base de datos, en este caso usamos mySQL de phpMyadmin.
Realizamos una base de datos el cual su nombre es “almacén”, además, Por el momento solo utilizamos una tabla, la que en mi caso, su nombre es “herramienta” en esta registramos los productos de nuestro catálogo.


## Autor
- Joel Peña Romero.

## Video explicativo
https://www.youtube.com/watch?v=IzXYmmCI6Qs

## License
- MIT
