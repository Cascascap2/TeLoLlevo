<?php
class session_controller extends CI_Controller{

public function logout(){
    session_start();
    unset($_SESSION['loggedin']);
    unset($_SESSION['nickname']);
    session_destroy();
    header('Location: '. "../home");
}

}