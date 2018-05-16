<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<?php

//include "application/db/connection.php";
include "application/controllers/usuarios_controller.php";

//$query = "SELECT * FROM usuarios";
//$result = mysqli_query( $conn, $query );

function create_user($conn){
    $insertQuery = "INSERT INTO `usuarios` (`id`, `nickname`, `email`, `telefono`,
                                          `nombre_completo`, `biografia`, `reputacion`)
                VALUES ('8', 'f', 'f', 'f', 'f', 'f', '5');";
    mysqli_query( $conn, $insertQuery);
}

//if( mysqli_num_rows($result) > 0 ){
//    echo "printing results..." . "<br/>";
//    while($row = mysqli_fetch_assoc($result)){
//        echo "<td>" . $row['nickname'] . "</td>" . "<br/>";
//    }
//}

//else
//    echo "no results" . "<br/>";

echo "This is a comfy home" . "<br/>";

//$uc = new usuarios_controller();
//$uc->crear_usuario('testboy2', 'f', 'f', 'f', 'f', 'f', 5);

?>

<form method="post" action="login">
    <input type="submit" value="Login"/>
</form>

<h1>Hello, world!</h1>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>





