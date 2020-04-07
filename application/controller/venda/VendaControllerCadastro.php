<?php
$data_venda = $_POST['Data'];
$preco_venda = $_POST['Preco'];
$desconto_venda = $_POST['Desconto'];
$preco_total_venda = $_POST['Total'];
$id_produto = $_POST['Produto'];

//Conexao
require "db.php";

//SQL Command
$sqlinsert = "INSERT INTO Venda (id_venda, data_venda, preco_venda, desconto_venda, preco_total_venda) VALUES (NULL , '$data_venda', '$preco_venda', '$desconto_venda', '$preco_total_venda')";
$sqlinsert = "INSERT INTO Venda_Produto (id_produto, id_venda, desconto_venda_produto, preco_venda_produto) VALUES ('$id_produto', '$id_venda', '$desconto_venda_produto', '$preco_venda_produto')";

//envio da query para o BD
mysqli_query($connection, $sqlinsert)or die("Não foi possível registrar a venda fornecida!");

?>

<?php
    require_once '../model/VendaModel.php';

    $data = $_POST['Data'];
    $preco = $_POST['Preco'];
    $desconto = $_POST['Desconto'];
    $precoTotal = $_POST['Total'];
    $idProduto = $_POST['Produto'];

    $novaVenda = new VendaModel();
    $novaVenda->setData($data);
    $novaVenda->setPreco($preco);
    $novaVenda->setDesconto($desconto);
    $novaVenda->setTotal($precoTotal);
    $novaVenda->setIdProduto($idProduto);

    if(VendaModel::cadastrar($novaVenda))
        header('');
    else
        header('');
?>