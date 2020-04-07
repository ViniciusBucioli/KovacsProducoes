<?php
    require_once '../model/ClienteModel.php';

    $CPF = $_POST['CPF'];
    $nome_cliente = $_POST['Nome'];
    $email_cliente = $_POST['Email'];
    $telefone_cliente = $_POST['Telefone'];
    $endereco_cliente = $_POST['Endereco'];

    $novoCliente = new ClienteModel();
    $novoCliente->setCpf($contato);
    $novoCliente->setNome($nome);
    $novoCliente->setEmail($email);
    $novoCliente->setTelefone($telefone);
    $novoCliente->setEndereco($endereco);

    if(ClienteModel::cadastrar($novoCliente))
        header('');
    else
        header('');
?>