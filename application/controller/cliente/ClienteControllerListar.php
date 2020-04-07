<?php
    require_once '../model/ClienteModel.php';

    $cpf = $_POST['CPF'];
    $nome = $_POST['Nome'];

    $respostaModel = ClienteModel::selectAll();
    $respostaModel = ClienteModel::selectByCPF($cpf);
    $respostaModel = ClienteModel::selectByName($nome);

    if($respostaModel == false)
        header('');
    else
        echo $respostaModel;
?>