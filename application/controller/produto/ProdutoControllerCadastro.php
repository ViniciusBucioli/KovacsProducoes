<?php
    require_once '../../model/ProdutoModel.php';
    require '../header.php';

    if($_SERVER['REQUEST_METHOD'] != 'POST') {
        // Bad request
        http_response_code(400);
        
        echo json_encode(array("message" => "Apenas POST."));
        exit();
    }
    
    $_POST = json_decode(file_get_contents('php://input'), true);

    if(
        !(
            isset($_POST['nome']) &&
            isset($_POST['categoria']) &&
            isset($_POST['preco']) &&
            isset($_POST['descricao'])
        )
    ) {
        // Bad request
        http_response_code(400);
        echo json_encode(array("message" => "Dados incompletos.".$empty_keys));
        exit();
    }
        
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $novoProduto = new ProdutoModel();
    $novoProduto->setNome($nome);
    $novoProduto->setCategoria($categoria);
    $novoProduto->setPreco($preco);
    $novoProduto->setDescricao($descricao);

    if($novoProduto->cadastrar($novoProduto)){
        // Produto criado
        http_response_code(201);
        // tell the user
        echo json_encode(array("message" => "Produto criado."));
    }
    else{
        // set response code - 503 service unavailable
        http_response_code(503);
        echo json_encode(array("message" => "Não foi possível cria o produto."));
    }
?>