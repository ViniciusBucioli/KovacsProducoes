<?php
    require_once '../model/EstoqueModel.php';

    $respostaModel = EstoqueModel::selectAll();

    if($respostaModel == false)
        header('');
    else
        echo $respostaModel;
?>