<?php

include "application/models/usuario.php";
include "application/controllers/daos/usuarios_daos.php";

class usuarios_controller{

    public function crear_usuario($nickname, $email, $telefono,
                                  $nombre_completo, $biografia, $imagen, $reputacion){

        //checks
        $user = new usuario($nickname, $email, $telefono, $nombre_completo, $biografia, $imagen, $reputacion);

        $userDao = new usuarios_daos();
        $userDao->persistir_usuario($user);

    }
}
