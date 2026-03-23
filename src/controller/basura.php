<?php

namespace Yangpimpollo\Crud\controller;

use Yangpimpollo\Crud\model\User;

class UserController {
    public function __construct() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->handleRequest();
        }
        $us1 = new User();
    }

    public function handleRequest() {
        // 1. Verificar que la petición sea POST
        //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "Procesando registro de usuario...";
            // 2. Recoger y limpiar datos básicos (Saneamiento)
            $userData = [
                'user_name' => trim($_POST['user_name']),
                'email'     => trim($_POST['email']),
                'pass'      => $_POST['pass']
            ];
    
            

            // 3. Validaciones simples (puedes expandir esto)
            if (empty($userData['user_name']) || empty($userData['email']) || empty($userData['pass'])) {
                die("Todos los campos son obligatorios.");
            }
            echo "Datos recibidos: " . print_r($userData, true);
            // 4. Instanciar el modelo y llamar al método de registro
            $us1 = new User();
            
            dd();

            $success = $us1->register($userData);

            // 5. Redireccionar o mostrar mensaje según el resultado
            if ($success) {
                // Registro exitoso: enviamos al login o bienvenida
                header("Location: ../view/Welcome.php?status=success");
                exit();
            } else {
                // Error (ej: email duplicado)
                echo "Hubo un error al registrar el usuario.";
            }
        //}
    }
    public function Asp() {
        echo "hola desde el controlador";
    }
}

// Para que el formulario ejecute la lógica al llegar al archivo:
    $controller = new UserController();
    // $controller->handleRequest();

echo "hola fuera del controlador";