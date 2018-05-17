<?php

    session_start();
    if(isset ($_SESSION["loggedin"])){
        echo "Bienvenido " . $_SESSION["nickname"] . "!<br/>";
    }
    echo "This is a comfy home" . "<br/>";

    ?>





