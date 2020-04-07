<?php
    require_once '../model/PontoModel.php';

    $matriculaFuncionario = $_POST['Matricula'];

    $respostaModel = PontoModel::selectAll();
    $respostaModel = PontoModel::selectByFuncionario($matriculaFuncionario);

    if($respostaModel == false)
        header('');
    else
        echo $respostaModel;
?>