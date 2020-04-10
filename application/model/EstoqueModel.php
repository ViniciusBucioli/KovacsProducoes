<?php
    require '../utils/db.php';

    class EstoqueModel {
        private $qtd_movimento_estoque;
        public function setMovimentoEstoque($qtd_movimento_estoque) { $this->qtd_movimento_estoque = $qtd_movimento_estoque; }
        public function getMovimentoEstoque() { return $this->qtd_movimento_estoque; }

        private $quantidade;
        public function setQuantidade($quantidade) { $this->quantidade = $quantidade; }
        public function getQuantidade() { return $this->quantidade; }

        private $conn;
        function __construct()
        {
            $db = new db();
            $this->conn = $db->connection;
        }
        

        // testar
        public static function cadastrar($novoEstoque) {
            // $objBD = new db();
            // $link = $objBD->mysqlConnect();
            if($query = $this->conn->prepare('INSERT INTO Cliente (qtd, quantidade) VALUES (?, ?);')){
                $query->bind_param("ss", $novoEstoque->getMovimentoEstoque(), $novoEstoque->getQuantidade());
                $runQuery = $query->execute();
                
            if($runQuery)
                return true;
            else
                return false;   
            }else {
                $error = $this->conn->errno . ' ' . $this->conn->error;
                return $error;
            }
        }
        // testar
        public static function selectAll() {
            // $objBD = new db();
            // $link = $objBD->mysqlConnect();
            if($query = $this->conn->prepare('SELECT * FROM Estoque')){
                $runQuery = $query->execute();
            }else {
                $error = $this->conn->errno . ' ' . $this->conn->error;
                return $error;
            }
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