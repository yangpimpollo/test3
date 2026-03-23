<?php

namespace Yangpimpollo\Crud;

class Prueba {
    public function saludar() {
        echo $_ENV['SECRET_TEXT'] . "\n";
        echo $_ENV['SECRET_NUMBER'] . "\n";
        return "¡La autocarga de PSR-4 funciona correctamente!";
    }
}