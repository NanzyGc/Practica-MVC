<?php

require 'helpers.php';
require ('template/header.php');
require ('clases/Usuario.php');
require ('bd/ConexionBD.php');

if(empty($_GET['url']))
    $_GET['url']='home';

controller($_GET['url']);

require('template/footer.php');
?>