<?php

require_once "application/controllers/usuarios_controller.php";

$nickname = $_POST["nickname"];
$password = $_POST["password"];
$email =    $_POST["email"];
$nombre =   $_POST["nombreCompleto"];
$telefono = $_POST["telefono"];

try{
    $uc = new usuarios_controller();
    $uc->crear_usuario($nickname, $email, $password, $telefono ,$nombre);
}catch (mysqli_sql_exception $e){
    echo $e->getMessage();
}

//sleep(3);
//header("Location: http://localhost:81/TeLoLlevo/login");
//die();
?>
<form method="post" action="login">
    <input type="submit" value="Volver al login"/>

</form>