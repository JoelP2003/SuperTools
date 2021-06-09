<?php
    require("../includes/constants.php");
    require("../includes/functions.php");

    $y=query("SELECT * FROM herramienta where id=?", $_GET['herramienta'])[0];

    require("../templates/Header.php");
    require("../templates/producto.php");
?>