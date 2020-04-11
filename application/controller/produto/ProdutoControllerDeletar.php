<?php

    if(
        empty($_POST['id']) &&
    ) {
        // Bad request
        http_response_code(400);
        
        echo json_encode(array("message" => "Dados incompletos."));
        exit();
    }


    $id = $_POST['id'];
    $produto = new ProdutoModel();
    $produto->setId($id);

    if($produto->atualizar($produto)) {

        // Produto criado
        http_response_code(200);
        echo json_encode(array("message" => "Produto atualizado."));
    } else {
        // set response code - 503 service unavailable
        http_response_code(503);
        echo json_encode(array("message" => "Não foi possível deletar o produto."));
    }
?>