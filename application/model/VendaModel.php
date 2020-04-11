<?php
    require '../utils/db.php';

    class VendaModel {
        private $data;
        public function setData($data) { $this->data = $data; }
        public function getData() { return $this->data; }

        private $preco;
        public function setPreco($preco) { $this->preco = $preco; }
        public function getPreco() { return $this->preco; }

        private $desconto;
        public function setDesconto($desconto) { $this->desconto = $desconto; }
        public function getDesconto() { return $this->desconto; }

        private $precoTotal;
        public function setPrecoTotal($precoTotal) { $this->precoTotal = $precoTotal; }
        public function getPrecoTotal() { return $this->precoTotal; }

        private $idProduto;
        public function setIdProduto($idProduto) { $this->idProduto = $idProduto; }
        public function getIdProduto() { return $this->idProduto; }

        public static function cadastrar($novoVenda) {
            if($query = $this->conn->prepare('INSERT INTO Venda (data_venda, preco_venda, desconto_venda, preco_total_venda) VALUES (?, ?, ?, ?);')){
                $query->bind_param("ssss", $novoVenda->getData(), $novoVenda->getPreco(), $novoVenda->getDesconto(), $novoVenda->getPrecoTotal());
                $runQuery = $query->execute();
            if($runQuery)
                return true;
            else
                return false;
        }
        else {
            $error = $this->conn->errno . ' ' . $this->conn->error;
            return $error;
        }
    }    
}
            

/*TODO - Venda_Produto
$query = $link->prepare('INSERT INTO Venda_Produto (id_produto, id_venda, desconto_venda_produto, preco_venda_produto) VALUES (?, ?, ?, ?);');
*/

            

/* TOD - List
selectAll();
selectByIdProduto($idProduto);
selectByData($data);
*/
?>