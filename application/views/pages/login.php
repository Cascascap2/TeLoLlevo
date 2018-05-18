<?php
session_start();
include "application/db/connection.php";
require_once "application/models/usuario.php";

if(isset($_POST["mail"]) and isset($_POST["password"])){
$conn = connection::conect();
if($conn->connect_error){
die("No se pudo establecer la conexion: " . $conn->connect_error);
}

$mail = $_POST["mail"];
$pass = $_POST["password"];

$query =  "SELECT * FROM `usuarios` WHERE `email` = '$mail'";
$result = mysqli_query( $conn, $query );

if($result->num_rows > 0){
$row = $result->fetch_assoc();
if($row["password"] == $pass){
    $id = $row["id"];
    $nickname = $row["nickname"];
    $telefono = $row["telefono"];
    $nombreCompleto = $row["nombre_completo"];
    $biografia = $row["biografia"];
    $imagen = $row["imagen"];
    $reputacion = $row["reputacion"];

    $user = new usuario($nickname, $mail, $pass, $telefono, $nombreCompleto, $biografia, $imagen, $reputacion);

    $_SESSION["loggedIn"] = true;
    $_SESSION["loggedUser"] = $user;
    header('Location: '. "home");
}
}else{
echo "Email o password incorrectos <br/>";
}
mysqli_close($conn);
}
?>
        This is a login

        <form method="post" action="registro">
            <input type="submit" value="Registrar"/>
        </form>
        <form class="form-signin" method="post" action="">
            <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="mail" class="sr-only">Email address</label>
            <input type="email" name="mail" id="mail" class="form-control" placeholder="Email address" required autofocus>
            <label for="pass" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>


