<?php
    require_once '../model/FuncionarioModel.php';

    $CPF_funcionario = $_POST['CPF'];
    $nome_funcionario = $_POST['Nome'];
    $cargo_funcionairo = $_POST['Cargo'];
    $hora_trabalho_funcionario = $_POST['Hora'];
    $salario_funcionario = $_POST['Salario'];
    $telefone_funcionario = $_POST['Telefone'];
    $endereco_funcionario = $_POST['Endereco'];
    $meta_funcionario = $_POST['Meta'];
    $comissao_funcionario = $_POST['Comissao'];
    $vendas_funcionario = $_POST['Vendas'];

    $novoFuncionario = new FuncionarioModel();
    $novoFuncionario->setCpf($CPF_funcionario);
    $novoFuncionario->setNome($nome_funcionario);
    $novoFuncionario->setCargo($cargo_funcionairo);
    $novoFuncionario->setHoraTrabalho($hora_trabalho_funcionario);
    $novoFuncionario->setSalario($salario_funcionario);
    $novoFuncionario->setTelefone($telefone_funcionario);
    $novoFuncionario->setEndereco($endereco_funcionario);
    $novoFuncionario->setMeta($meta_funcionario);
    $novoFuncionario->setComissao($comissao_funcionario);
    $novoFuncionario->setVendas($vendas_funcionario);

    if(FuncionarioModel::cadastrar($novoFuncionario))
        header('');
    else
        header('');
?>