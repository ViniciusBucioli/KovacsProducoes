<?php
$CPF_funcionario = $_POST['CPF'];
$nome_funcionario = $_POST['Nome'];
$cargo_funcionairo = $_POST['Cargo'];
$hora_trabalho_funcionario = $_POST['Hora'];
$salario_funcionario = $_POST['Salario'];
$telefone_funcionario = $_POST['Telefone'];
$endereco_funcionario = $_POST['Endereco'];
$meta_funcionario = $_POST['Meta'];
$comissao_funcionario = $_POST['Comissao'];
$vendas_funcionario = $_POST['Vendas'];

//Conexao
require "db.php";

//SQL Command
$sqlinsert = "INSERT INTO Funcionario (Matricula, CPF_funcionario, nome_funcionario, cargo_funcionairo, hora_trabalho_funcionario, salario_funcionario, telefone_funcionario, endereco_funcionario, meta_funcionario, comissao_funcionario, vendas_funcionario) VALUES (null, '$CPF_funcionario', '$nome_funcionario', '$cargo_funcionairo', '$hora_trabalho_funcionario', '$salario_funcionario', '$telefone_funcionario', '$endereco_funcionario', '$meta_funcionario', '$comissao_funcionario', '$vendas_funcionario')";

//envio da query para o BD
mysqli_query($connection, $sqlinsert)or die("Não foi possível cadastrar o funcionário fornecido!");

?>