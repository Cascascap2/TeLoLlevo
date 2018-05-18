<?php
?>
<html>
    <head>
        <title> Te lo llevo </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" >
    </head>
    <body>

    <form method="post" action="login">
        <input type="submit" value="Login" class="btn btn-primary"/>
    </form>
    <form method="post" action="session_controller/logout">
        <input type="submit" value="Logout" class="btn btn-primary"/>
    </form>
    <form method="post" action="home">
        <input type="submit" value="Go Home" class="btn btn-primary"/>
    </form>