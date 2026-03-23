<?php

namespace Yangpimpollo\Crud;
use Yangpimpollo\Crud\controller\UserController;
use Yangpimpollo\Crud\model\User;

echo "Hola Mundo Router";
$nombre = $_POST['fname'];
$apellido = $_POST['lname'];
echo "Nombre: " . $nombre . " Apellido: " . $apellido;

var_dump($nombre);
//$controller = new UserController();
$us1 = new User();

    // $controller->handleRequest();








//echo "Hola Mundo router";




// Imprimimos los resultados
// echo "Nombre: " . $nombre . "<br>";
// echo "Apellido: " . $apellido;
// echo basename($_SERVER['PHP_SELF']);
//echo "ddddddddddddd".$_SERVER['HTTP_REFERER'];
// if($_POST['action']=='register') {
//     echo "Registrando usuario: $nombre $apellido";
// } else {
//     echo "Acción no reconocida.";
// }