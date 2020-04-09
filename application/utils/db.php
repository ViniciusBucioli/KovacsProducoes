<?php

class db {
    //Database credentials
    private $host="localhost";
    private $user="root";
    private $password="";
    private $db="kovacs_producoes";

    //Connection attemp
    public $connection;

    function __construct(){
        $this->connection = new mysqli_connect($host, $user, $password, $db);
        //Connection check
        if ($this->connection->connect_error) {
            die("ERROR: Could not connect. " . $conn->connect_error);
        }
    }
}

?>