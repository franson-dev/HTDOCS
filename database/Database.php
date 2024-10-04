<?php

class Database {

    private $host = 'localhost';
    private $dbName = 'concessionaria';
    private $username = 'root';
    private $password = '';

    protected $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbName);
    }
    
}