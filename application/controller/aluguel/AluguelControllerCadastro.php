<?php
$data_aluguel = $_POST['Data'];
$preco_aluguel_produto = $_POST['Preco'];
$desconto_aluguel_produto = $_POST['Desconto'];
$preco_total_aluguel = $_POST['Total'];
$id_produto = $_POST['Produto'];

//Conexao
require "db.php";

//SQL Command
$sqlinsert = "INSERT INTO Aluguel (id_aluguel, data_aluguel, preco_aluguel_produto, desconto_aluguel_produto, preco_total_aluguel) VALUES (NULL , '$data_aluguel', '$preco_aluguel_produto', '$desconto_aluguel_produto', '$preco_total_aluguel')";
$sqlinsert = "INSERT INTO Aluguel_Produto (id_produto, id_aluguel, desconto_aluguel_produto, preco_aluguel_produto) VALUES ('$id_produto', '$id_aluguel', '$desconto_aluguel_produto', '$preco_aluguel_produto')";

//envio da query para o BD
mysqli_query($connection, $sqlinsert)or die("Não foi possível registrar o aluguel fornecido!");
 
?>