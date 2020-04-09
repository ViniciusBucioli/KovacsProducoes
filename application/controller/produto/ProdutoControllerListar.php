<?php
    require_once '../../model/ProdutoModel.php';

    //$nome = $_GET['Nome'];
    //$categoria = $_GET['Categoria'];
    $word = $_GET['word'];

    $respostaModel = ProdutoModel::selectAll();
    $respostaModel = ProdutoModel::selectByNome($nome);
    $respostaModel = ProdutoModel::selectByCategory($categoria);

    $searchResult = ProdutoModel::search($word);

    if($searchResult == false)
        header('');
    else
        echo $searchResult;
?>