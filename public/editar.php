<?php
    require("../includes/constants.php");
    require("../includes/functions.php");

    $id=query("SELECT * FROM herramienta WHERE id=?", $_GET['id'])[0];

    require("../templates/Header.php");
    require("../templates/formeditar.php");
    
?>