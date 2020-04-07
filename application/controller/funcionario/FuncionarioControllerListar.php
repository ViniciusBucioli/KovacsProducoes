<?php
    require_once '../model/FuncionarioModel.php';

    $cpf = $_POST['CPF'];
    $nome = $_POST['Nome'];

    $respostaModel = FuncionarioModel::selectAll();
    $respostaModel = FuncionarioModel::selectByID();
    $respostaModel = FuncionarioModel::selectByCPF($cpf);
    $respostaModel = FuncionarioModel::selectByName($nome);

    if($respostaModel == false)
        header('');
    else
        echo $respostaModel;
?>