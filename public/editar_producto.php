<?php
    require("../includes/constants.php");
    require("../includes/functions.php");

    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $marca=$_POST["marca"];
    $material=$_POST["material"];
    $stock=$_POST["stock"];
    $imagen=$_POST["imagen"];

    $editar=query("UPDATE `herramienta` SET `nombre` = ?, `precio` = ?, `marca` = ?, `material` = ?, `stock` = ?, `imagen` = ? WHERE `herramienta`.`id`=?", $nombre, $precio, $marca, $material, $stock, $imagen, $_GET["id"]);
    var_dump($editar);
    

    redirect();
?>