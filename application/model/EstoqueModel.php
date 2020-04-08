<?php
    require '../utils/db.php';

    class EstoqueModel {
        private $qtd_movimento_estoque;
        public function setMovimentoEstoque($qtd_movimento_estoque) { $this->qtd_movimento_estoque = $qtd_movimento_estoque; }
        public function getMovimentoEstoque() { return $this->qtd_movimento_estoque; }

        private $quantidade;
        public function setQuantidade($quantidade) { $this->quantidade = $quantidade; }
        public function getQuantidade() { return $this->quantidade; }

        public static function cadastrar($novoEstoque) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('INSERT INTO Cliente (qtd_movimento_estoque, quantidade) VALUES (?, ?);');
            $query->bind_param("ss", $novoEstoque->getMovimentoEstoque(), $novoEstoque->getQuantidade());
            $runQuery = $query->execute();

            if($runQuery)
                return true;
            else
                return false;
        }

        public static function selectAll() {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Estoque');
            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }
    }
?>