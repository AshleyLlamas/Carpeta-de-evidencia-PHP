<?php

#EL INDEX: En él mostraremos la salida de las vistas al usuario y también a traves de él las distintas acciones que el usuario envíe al controlador.

#se requiere una sola vez que vea el archivo siguiente:
require_once "controllers/controller.php";
require_once "models/model.php";

$mvc = new MvcController();
$mvc->plantilla();


?>