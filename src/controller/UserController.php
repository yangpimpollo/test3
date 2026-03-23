<?php

namespace Yangpimpollo\Crud\controller;
use Yangpimpollo\Crud\model\User;


class UserController {
    public function __construct() {
        echo "dentro del controlador";
        //if ($_SERVER['REQUEST_METHOD'] === 'POST') $this->handleRequest();
    }

    public function handleRequest() {
        //echo "dentro del controlador";
    }
                 


       
}

//echo "fuera del controlador";