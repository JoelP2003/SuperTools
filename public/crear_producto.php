<?php
    require("../includes/constants.php");
    require("../includes/functions.php");

    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $marca=$_POST["marca"];
    $material=$_POST["material"];
    $stock=$_POST["stock"];
    $imagen=$_POST["imagen"];

    $inserccion=query("INSERT INTO `herramienta` (`id`, `nombre`, `precio`, `marca`, `material`, `stock`, `imagen`) VALUES (NULL, ?, ?, ?, ?, ?, ?)",$nombre,$precio,$marca,$material,$stock,$imagen);
    var_dump($inserccion);
    
    //echo("guardado en la base de datos");
    redirect();
?>