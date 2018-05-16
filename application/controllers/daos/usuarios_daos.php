<?php

include "application/db/connection.php";

class usuarios_daos{

    public function persistir_usuario(usuario $u){
        $conn = connection::conect();

        $nickname = $u->getNickname();
        $email = $u->getEmail();
        $password = $u->getPassword();
        $telefono = $u->getTelefono();
        $nombre_completo = $u->getNombreCompleto();
        $biografia = $u->getBiografia();
        $reputacion = $u->getReputacion();

        $query = "INSERT INTO `usuarios` (`id`, `nickname`, `email`, `password`, `telefono`,
                                              `nombre_completo`, `biografia`, `reputacion`)
                    VALUES (NULL, '$nickname', '$email', '$password', '$telefono', '$nombre_completo',
                            '$biografia', '$reputacion');";

        try{
            mysqli_query( $conn, $query );
        }catch (mysqli_sql_exception $e){
            echo $e->getMessage();
        }
    }

    public function checkearUsuarioPorNickname($nickname){
        $conn = connection::conect();
        $query = "SELECT * FROM `usuarios` WHERE `nickname` = '$nickname'";
        $result = mysqli_query( $conn, $query );
        if( mysqli_num_rows($result) > 0 ) {
            while( $row = mysqli_fetch_assoc($result) ) {
                if($row["nickname"] == $nickname){
                    return true;
                }
            }
        }
        return false;
    }

    public function checkearUsuarioPorMail($mail){
        $conn = connection::conect();
        $query = "SELECT * FROM `usuarios` WHERE `email` = '$mail'";
        $result = mysqli_query( $conn, $query );
        if( mysqli_num_rows($result) > 0 ) {
            while( $row = mysqli_fetch_assoc($result) ) {
                if($row["email"] == $mail){
                    return true;
                }
            }
        }
        return false;
    }
}