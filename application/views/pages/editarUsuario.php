<?php
require_once "application/models/usuario.php";

session_start();
if(isset ($_SESSION["loggedIn"])){
    $user = $_SESSION["loggedUser"];
    echo "Sus datos: </br>";
    echo "Aca se imprime una imagen </br>";
    echo "<button>Editar</button><br/>"; //editar imagen
    echo "Nickname: " . $user->getNickname() . "<button>Editar</button>" . "</br>";
    echo "Email: " . $user->getEmail() . "<button>Editar</button>" . "<br/>";
    echo "Telefono: " . $user->getTelefono() . "<button>Editar</button>" . "<br/>";
    echo "Nombre: " . $user->getNombreCompleto() . "<button>Editar</button>" . "<br/>";
    echo "Biografia: " . $user->getBiografia() . "<br/>";
    echo "<button>Editar biografia</button><br/>";
    echo "<button>Editar password</button>";
}
else
    header('Location: '. "home");