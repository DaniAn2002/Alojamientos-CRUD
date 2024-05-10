<?php

class DB
{

    public $host;
    public $user;
    public $password;
    public $database;

    public function __construct()
    {
        $this->host = '127.0.0.1';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'alojamientos';
    }

    public function connect()
    {
        $connection = mysqli_connect($this->host, $this->user, $this->password);
        mysqli_select_db($connection, $this->database);

        return $connection;
    }
}


