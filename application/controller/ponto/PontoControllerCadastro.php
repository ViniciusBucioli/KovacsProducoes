<?php
    require_once '../model/PontoModel.php';

    $matricula_funcionario = $_POST['Matricula'];
    $entrada_funcionario = $_POST['Entrada'];
    $saida_funcionario = $_POST['Saida'];

    $novoPonto = new PontoModel();
    $novoPonto->setMatriculaFuncionario($matricula_funcionario);
    $novoPonto->setEntrada($entrada_funcionario);
    $novoPonto->setSaida($saida_funcionario);

    if(PontoModel::cadastrar($novoPonto))
        header('');
    else
        header('');
?>