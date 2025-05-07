<?php

require __DIR__ . '/../vendor/autoload.php';

$request = new App\Http\Request;

//usar el metodo del Request para poder usar las peticiones del usuario (rutas)
$request->send();

?>