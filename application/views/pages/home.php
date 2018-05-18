<?php
    require_once "application/models/usuario.php";
    session_start();
    if(isset ($_SESSION["loggedIn"])){
        $user = $_SESSION["loggedUser"];
        echo "Bienvenido " . $user->getNickname() . "!<br/>";
    }
    echo "This is a comfy home" . "<br/>";

    if(isset($_SESSION["loggedIn"])){?>
        <form method="post" action="editarUsuario">
            <input type="submit" value="Editar mis datos" class="btn btn-primary"/>
        </form>
    <?php }




