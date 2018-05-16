<?php

include "application/models/usuario.php";
include "application/controllers/daos/usuarios_daos.php";

class usuarios_controller{

    public function crear_usuario($nickname, $email, $password, $telefono,
                                  $nombre_completo){

        $userDao = new usuarios_daos();
        if(empty($nickname) or empty($email) or empty($password) or empty($telefono) or empty($nombre_completo)){
            //$nickname == "" and $email == "" and  $password == null and  $telefono == "" and $nombre_completo == ""
            echo "Uno o mas campos estan vacios <br/>";
        }
        else{
            If($userDao->checkearUsuarioPorNickname($nickname)){
                echo "Nickname en uso <br/>";
            }
            else{
                if($userDao->checkearUsuarioPorMail($email)){
                    echo "Email en uso <br/>";
                }
                else{
                    $user = new usuario($nickname, $email, $password, $telefono, $nombre_completo, "", "",5);
                    $userDao->persistir_usuario($user);
                    echo "Usuario registrado con exito <br/>";
                }
            }
        }
}

    //Returna true si existe un usuario con el mismo nickname.
    public function checkearUsuarioPorNickname($nickname){
        $userDao = new usuarios_daos();
        return $userDao->checkearUsuarioPorNickname($nickname);
    }

    //Returna true si existe un usuario con el mismo email.
    public function checkearUsuarioPorMail($mail){
        $userDao = new usuarios_daos();
        return $userDao->checkearUsuarioPorMail($mail);
    }
}
