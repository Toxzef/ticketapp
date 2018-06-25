<?php
include_once 'login2.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"  crossorigin="anonymous">
    </head>
    <body>
        <form class="pure-form pure-form-stacked" action="login.php" method="post">
            <label for="txtRut">Rut</label><br>
            <input type="text" name="txtRut"><br>
            <label for="txtPassword">Contraseña</label><br>
            <input type="password" name="txtPassword"><br>
            <button class="pure-button pure-button-primary">Iniciar Sesión</button>
        </form>
        <p style="color:red;" > <?= $mensaje ?></p>
    </body>
</html>
