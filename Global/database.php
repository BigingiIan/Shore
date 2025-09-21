<?php
class database {
    private $host;
    private $user;
    private $pass;
    private $dbname;
    public $conn;

    public function __construct($config) {
        $this->host = $config['db_host'];
        $this->user = $config['db_user'];
        $this->pass = $config['db_pass'];
        $this->dbname = $config['db_name'];
        $this->connect();
    }

    private function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}