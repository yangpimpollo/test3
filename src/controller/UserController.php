<?php

namespace Yangpimpollo\Crud\controller;
use Yangpimpollo\Crud\model\User;


class UserController {
    private $us1;


    public function __construct() {
        //echo "dentro del controlador";
        $this->us1 = new User();
        //if ($_SERVER['REQUEST_METHOD'] === 'POST') $this->handleRequest();
    }

    public function handleRequest() {
        echo "handleRequesthandleRequestdentro del controlador";
        $userData = [
                'user_name' => trim($_POST['user_name']),
                'email'     => trim($_POST['email']),
                'pass'      => $_POST['pass']
        ];

        return $this->us1->register($userData);
    }

    public function login() {
        // Implementa la lógica de inicio de sesión aquí
        $userData = [
            'user_name' => trim($_POST['user_name']),
            'pass'      => $_POST['pass']
        ];

        return $this->us1->login($userData);
        
    }   
                 


       
}

//echo "fuera del controlador";