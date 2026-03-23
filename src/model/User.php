<?php

namespace Yangpimpollo\Crud\model;

use Yangpimpollo\Crud\database\Connection;
use PDOException;

class User {
    private $id;
    private $user_name;
    private $pass;
    private $email;
    private $role = 'user';
    private $db;

    public function __construct() {
        $this->db = Connection::getInstance();
        echo "dentro de user constructor";
    }

    // public function getId() { return $this->id; }
    // public function getName() { return $this->user_name; }
    // public function getEmail() { return $this->email;}
    // public function getRole() { return $this->role; }

    public function register($data) {
        $this->user_name = $data['user_name'];
        $this->pass = password_hash($data['pass'], PASSWORD_DEFAULT);
        $this->email = $data['email'];

        try {
            $sql = "INSERT INTO usuarios (user_name, pass, email, role) VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($sql);
            
            // Ejecutamos pasando los valores en orden Retorna true si tuvo éxito, false si no
            return $stmt->execute([
                $this->user_name,
                $this->pass,
                $this->email,
                $this->role
            ]);
        } catch (PDOException $e) {
            return false;
        }       
    }

    public function login($data) {
        $this->user_name = $data['user_name'];
        $this->pass = $data['pass'];

        try {
            $sql = "SELECT * FROM usuarios WHERE user_name = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$this->user_name]);
            $user = $stmt->fetch();

            if ($user && password_verify($this->pass, $user['pass'])) {
                // Aquí podrías iniciar sesión, por ejemplo, guardando datos en $_SESSION
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>