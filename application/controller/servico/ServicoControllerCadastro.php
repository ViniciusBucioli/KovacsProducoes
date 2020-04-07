<?php
    require_once '../model/ServicoModel.php';

    $nome = $_POST['Nome'];
    $categoria = $_POST['Categoria'];
    $preco = $_POST['Preco'];
    $descricao = $_POST['Descricao'];

    $novoServico = new ServicoModel();
    $novoServico->setNome($nome);
    $novoServico->setCategoria($categoria);
    $novoServico->setEmail($preco);
    $novoServico->setTelefone($descricao);

    if(ServicoModel::cadastrar($novoServico))
        header('');
    else
        header('');
?>