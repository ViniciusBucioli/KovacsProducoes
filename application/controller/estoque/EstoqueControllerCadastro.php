<?php
    require_once '../model/EstoqueModel.php';

    $qtd_movimento_estoque = $_POST['QTD_Movimento'];
    $quantidade = $_POST['QTD'];

    $novoEstoque = new EstoqueModel();
    $novoEstoque->setMovimentoEstoque($qtd_movimento_estoque);
    $novoEstoque->setQuantidade($quantidade);

    if(EstoqueModel::cadastrar($novoEstoque))
        header('');
    else
        header('');
?>