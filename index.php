<?php

require_once __DIR__ . '/bootstrap.php';

use Yangpimpollo\Crud\model\User;
use Yangpimpollo\Crud\Prueba;
use Yangpimpollo\Crud\controller\UserController;
$controller = new UserController();
$action = $_GET['action'];

switch ($action) {
    case 'create':
        require 'src/view/Create.php'; 
        break;

    case 'login':
        require 'src/view/Welcome.php'; 
        break;

    default:
        require 'src/view/Home.php'; 
        break;
}




















// $controller = new UserController();
// $action = $_GET['action'];


// if ($action === 'create') {
//     echo "Crear usuario";
// } else {
//     echo "Acción no reconocida.";
// } 








    // $pr = new Prueba();
    // $pr->saludar();
    //$us1 = new User();
    //var_dump($us1);
    //require 'src/view/Create.php'; 
    //echo "Hola Mundo";

    //$controller = new UserController();
    // $controller->Asp();

?>

<!-- <!DOCTYPE html>
<html>
<body>

<form action="index.php?action=creatwe" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html> -->