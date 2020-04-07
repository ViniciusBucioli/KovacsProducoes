<?php

//Database credentials
$host="localhost";
$user="root";
$password="";
$db="kovacs_producoes";

//Connection attemp
$connection = mysqli_connect($host, $user, $password, $db);

//Connection check
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>