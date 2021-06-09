<?php
    require("../includes/constants.php");
    require("../includes/functions.php");


    $eliminar=query("DELETE FROM `herramienta` WHERE `herramienta`.`id`=?",$_GET["id"]);
    
    //echo("Producto eliminado correctamente");
    redirect();
?>