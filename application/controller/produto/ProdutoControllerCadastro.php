<?php
    require_once '../model/ProdutoModel.php';

    $nome = $_POST['Nome'];
    $categoria = $_POST['Categoria'];
    $preco = $_POST['Preco'];
    $descricao = $_POST['Descricao'];

    $novoProduto = new ProdutoModel();
    $novoProduto->setNome($nome);
    $novoProduto->setCategoria($categoria);
    $novoProduto->setEmail($preco);
    $novoProduto->setTelefone($descricao);

    if(ProdutoModel::cadastrar($novoProduto))
        header('');
    else
        header('');
?>