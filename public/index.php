<?php
    require("../includes/constants.php");
    require("../includes/functions.php");

    if(isset($_GET['q'])){
        $herramienta=query("SELECT * FROM herramienta WHERE nombre LIKE ?", '%' .$_GET['q']. '%');
        }
    else{
        $herramienta=query("SELECT * FROM herramienta");
    }
    require("../templates/Header.php");
    require("../templates/index.php");
?>