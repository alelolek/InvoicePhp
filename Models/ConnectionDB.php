<?php

class ConnectionDB
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $dotenv = parse_ini_file(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '.env');
        $host = $dotenv['DB_HOST'];
        $db = $dotenv['DB_DATABASE'];
        $user = $dotenv['DB_USERNAME'];
        $pass = $dotenv['DB_PASSWORD'];

        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

        try {
            $this->connection = new PDO($dsn, $user, $pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception('Connection failed: ' . $e->getMessage());
        }
    }

    public static function getInstanceConnection()
    {
        if (!self::$instance) {
            self::$instance = new ConnectionDB();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
?>
