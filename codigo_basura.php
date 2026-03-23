<?php

echo "pagina 222.";

require_once __DIR__ . '/bootstrap.php';

// use Yangpimpollo\Crud\Prueba;
// use Yangpimpollo\Crud\database\Connection;
use Yangpimpollo\Crud\model\User;

// $db = Connection::getInstance();
// $test = new Prueba();
// echo $test->saludar();

    //require 'src/view/Login.php';
    //echo "Hola Mundo";
    require 'src/view/Create.php';
    //echo "Hola Mundo";


    // $us1 = new User();
    // $data = [
    //     'user_name' => 'maria123',
    //     'pass' => '123456',
    //     'email' => 'maria123@ejemplo.com'
    // ];  
    // $result = $us1->register($data);
    // if ($result) {
    //     echo "Usuario registrado exitosamente.";
    // } else {
    //     echo "Error al registrar el usuario.";
    // }
?>

<!-- 
<!DOCTYPE html>
<html>
<body>

<form action="src/Router.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html> -->