<?php

class Database {
    private static $instance = null;
    private $pdo;

    private function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=E_commerce';
        $username = 'root';
        $password = 'ben';

        try {
            $this->pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            throw new Exception('ERREUR DE CONNECTION');
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) 
        {
            self::$instance = new self();
        }
        return self::$instance->pdo;
    }
}
