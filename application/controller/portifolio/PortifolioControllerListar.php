<?php
//Conexao
require "db.php";

function selectAll() {
    //SQL Command
    $sqlinsert = "SELECT * FROM Portifolio";
    //envio da query para o BD
    mysqli_query($connection, $sqlinsert)or die("Não foi possível listar o portifolio!");
}

function selectByID($id_portifolio) {
    //SQL Command
    $sqlinsert = "SELECT * FROM Portifolio WHERE id_portifolio = '$id_portifolio'";
    //envio da query para o BD
    mysqli_query($connection, $sqlinsert)or die("Não foi possível listar o arquivo!");
}

function selectByName($nome_portifolio) {
    //SQL Command
    $sqlinsert = "SELECT * FROM Portifolio WHERE nome_portifolio = '$nome_portifolio'";
    //envio da query para o BD
    mysqli_query($connection, $sqlinsert)or die("Não foi possível listar os arquivos!");
}

?>