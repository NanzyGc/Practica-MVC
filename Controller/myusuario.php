<?php

    $usuario = new Usuario();

$titulo ='Bienvenidos al MyUsuario';
$contenido = '......';

$variables = array('titulo'=>$titulo,
'contenido'=>$contenido,
'nombre'=>$usuario->setUusuario());

view ('myusuario',$variables);

?>