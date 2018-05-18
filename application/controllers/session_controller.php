<?php


session_start();
        unset($_SESSION['loggedin']);
        unset($_SESSION['nickname']);
        session_destroy();
        header('Location: '. "home");
