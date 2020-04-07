<?php
    require_once '../model/ServicoModel.php';

    $nome = $_POST['Nome'];
    $categoria = $_POST['Categoria'];

    $respostaModel = ServicoModel::selectAll();
    $respostaModel = ServicoModel::selectByNome($nome);
    $respostaModel = ServicoModel::selectByCategory($categoria);

    if($respostaModel == false)
        header('');
    else
        echo $respostaModel;
?>