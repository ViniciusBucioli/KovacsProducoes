<?php
    require_once '../../model/ProdutoModel.php';
    
    header("Access-Control-Allow-Origin: *");
    //$nome = $_GET['Nome'];
    //$categoria = $_GET['Categoria'];
    $word = $_GET['word'];

    // $respostaModel = ProdutoModel::selectAll();
    // $respostaModel = ProdutoModel::selectByNome($nome);
    // $respostaModel = ProdutoModel::selectByCategory($categoria);

    $produtoModel = new ProdutoModel();
    $searchResult = $produtoModel->search($word);
    if($searchResult == false)
        //header('');
        echo 'error';
    else
        echo $searchResult;
?>