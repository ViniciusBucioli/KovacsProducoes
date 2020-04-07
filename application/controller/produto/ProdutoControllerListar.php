<?php
    require_once '../model/ProdutoModel.php';

    $nome = $_POST['Nome'];
    $categoria = $_POST['Categoria'];

    $respostaModel = ProdutoModel::selectAll();
    $respostaModel = ProdutoModel::selectByNome($nome);
    $respostaModel = ProdutoModel::selectByCategory($categoria);

    if($respostaModel == false)
        header('');
    else
        echo $respostaModel;
?>