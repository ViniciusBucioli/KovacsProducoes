<?php
    require_once '../../model/ProdutoModel.php';

    
    if($_SERVER['REQUEST_METHOD'] != 'PUT') {
        // Bad request
        http_response_code(400);
        
        echo json_encode(array("message" => "Apenas PUT."));
        exit();
    }
    
    parse_str(file_get_contents("php://input"),$put);

    if(
        !(
            isset($put['id']) &&
            isset($put['nome']) &&
            isset($put['categoria']) &&
            isset($put['preco']) &&
            isset($put['descricao'])
        )
    ) {
        // Bad request
        http_response_code(400);
        
        echo json_encode(array("message" => "Dados incompletos."));
        exit();
    }

    $id = $put['id'];
    $nome = $put['nome'];
    $categoria = $put['categoria'];
    $preco = $put['preco'];
    $descricao = $put['descricao'];

    $produto = new ProdutoModel();
    $produto->setId($id);
    $produto->setNome($nome);
    $produto->setCategoria($categoria);
    $produto->setPreco($preco);
    $produto->setDescricao($descricao);

    if($produto->atualizar($produto)) {

        // Produto criado
        http_response_code(200);
        echo json_encode(array("message" => "Produto atualizado."));
    } else {
        // set response code - 503 service unavailable
        http_response_code(503);
        echo json_encode(array("message" => "Não foi possível atualizar o produto."));
    }
?>