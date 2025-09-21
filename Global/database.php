<?php
class Database {
    private $connection;
    private static $instance;

    private function __construct($config) {
        if ($config['db_type'] === 'mysqli') {
            $this->connection = new mysqli(
                $config['db_host'], 
                $config['db_user'], 
                $config['db_pass'], 
                $config['db_name'],
                $config['db_port'] ?? 3306
            );

        if ($this->connection->connect_error) {
            die("Database connection failed: " . $this->connection->connect_error);
        }
        } else {
            throw new Exception("Unsupported database type: " . $config['db_type']);
        }
    }

    public static function getInstance($config){
        if(!self::$instance){
            self::$instance = new Database($config);
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }

}