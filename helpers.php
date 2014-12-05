<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 16/10/2014
 * Time: 17:25
 */

function view($plantilla, $variables = array()){
    extract($variables);
    require('views/'.$plantilla.'.tpl.php');
}

function controller($nombre)
{
    if (empty($nombre))
        $nombre = 'home';


    $archivo = "controller/$nombre.php";

    if (file_exists($archivo))
        require($archivo);
    else
        echo "Error archivo no encontrado";
}

?>