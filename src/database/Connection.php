<?php

namespace Yangpimpollo\Crud\database;

use PDO;
use PDOException;

class Connection {
    private static ?PDO $instance = null;
    private function __construct() {}
    private function __clone() {}
    public function __wakeup() { throw new \Exception("No se permite deserializar la conexión"); }

    public static function getInstance(): PDO {
        if (self::$instance === null) {
            try {
                $host = $_ENV['DB_HOST'];
                $db   = $_ENV['DB_DATABASE'];
                $user = $_ENV['DB_USERNAME'];
                $pass = $_ENV['DB_PASSWORD'];
                $port = $_ENV['DB_PORT'];

                $dsn = "pgsql:host=$host;port=$port;dbname=$db;";
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                    PDO::ATTR_PERSISTENT         => false,
                ];
                
                self::$instance = new PDO($dsn, $user, $pass, $options);
                echo "¡Conectado a Postgres en WSL!";

            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}