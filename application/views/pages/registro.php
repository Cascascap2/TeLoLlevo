<?php

echo "This is a register page" . "<br/>";

?>

<form method="post" action="home">
    <input type="submit" value="Go Home"/>
</form>

<form method="post" action="registrar">
    <input type="text" name="nickname" /> Nickname <br/>
    <input type="password" name="password"  /> Password <br/>
    <input type="text" name="email"  /> Email <br/>
    <input type="text" name="nombreCompleto"  /> Nombre Completo <br/>
    <input type="text" name="telefono"  /> Telefono <br/>

    <input type="submit" name="registrar"/>
</form>