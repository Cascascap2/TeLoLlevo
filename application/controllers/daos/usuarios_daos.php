<?php

include "application/db/connection.php";

class usuarios_daos{

    public function persistir_usuario(usuario $u){
        $conn = connection::conect();

        $nickname = $u->getNickname();
        $email = $u->getEmail();
        $telefono = $u->getTelefono();
        $nombre_completo = $u->getNombreCompleto();
        $biografia = $u->getBiografia();
        $reputacion = $u->getReputacion();

        $query = "INSERT INTO `usuarios` (`id`, `nickname`, `email`, `telefono`,
                                              `nombre_completo`, `biografia`, `reputacion`)
                    VALUES (NULL, '$nickname', '$email', '$telefono', '$nombre_completo',
                            '$biografia', '$reputacion');";

        try{
            mysqli_query( $conn, $query );
        }catch (mysqli_sql_exception $e){
            echo $e->getMessage();
        }
    }

}