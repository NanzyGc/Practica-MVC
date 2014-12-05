<?php
$usuario02 = new Usuario();
?>

<html>
    <head></head>
            <body>
            <h1> <?=$titulo   ?> </h1>
            <p> <?=$contenido   ?> </p>
            <p> <?=$nombre   ?> </p>
            <p> <?php
                $usuario02->setUusuario();
                $usuario02->getUsuario();

                $usuario02->consultaG();
                ?> </p>
            </body>
</html>