<?php
    require_once '../../model/ServicoModel.php.php';
    require '../header.php';
    
    if(
        empty($_POST['id'])
    ) {
        // Bad request
        http_response_code(400);
        
        echo json_encode(array("message" => "Dados incompletos."));
        exit();
    }
    
    $id = $_POST['id'];
    $servico = new ServicoModel();

    if($servico->delete($id)) {

        // Produto criado
        http_response_code(200);
        echo json_encode(array("message" => "Produto deletado."));
    } else {
        // set response code - 503 service unavailable
        http_response_code(503);
        echo json_encode(array("message" => "Não foi possível deletar o produto."));
    }
?>