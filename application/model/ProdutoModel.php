<?php
    require '../../utils/db.php';

    class ProdutoModel {
        private $nome;
        public function setNome($cpf) { $this->cpf = $cpf; }
        public function getNome() { return $this->cpf; }

        private $categoria;
        public function setCategoria($categoria) { $this->categoria = $categoria; }
        public function getCategoria() { return $this->categoria; }

        private $preco;
        public function setPreco($preco) { $this->preco = $preco; }
        public function getPreco() { return $this->preco; }

        private $descricao;
        public function setDescricao($descricao) { $this->descricao = $descricao; }
        public function getDescricao() { return $this->descricao; }

        private $objBD;

        function __construct(){
            $this->objDB = new db();
        }
        
        public static function cadastrar($novoProduto) {

            $query = $this->objDb->prepare('INSERT INTO Produto (nome_produto, categoria_produto, preco_custo_produto, descricao_produto) VALUES (?, ?, ?, ?);');
            $query->bind_param("sssss", $novoProduto->getNome(), $novoProduto->getCategoria(), $novoProduto->getPreco(), $novoProduto->getDescricao());
            $runQuery = $query->execute();

            if($runQuery)
                return true;
            else
                return false;
        }
        
        public static function selectAll() {

            $query = $this->objDb->prepare('SELECT * FROM Produto');
            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }
        
        public static function selectByID($idProduto) {

            $query = $this->objDb->prepare('SELECT * FROM Produto WHERE id_produto = ?;');
            $query->bind_param("s", $idProduto);

            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }
        
        public static function selectByNome($nome) {

            $query = $this->objDb->prepare('SELECT * FROM Produto WHERE nome_produto = ?;');
            $query->bind_param("s", $nome);

            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }

        public static function selectByCategory($categoria) {

            $query = $this->objDb->prepare('SELECT * FROM Produto WHERE categoria_produto = ?;');
            $query->bind_param("s", $categoria);

            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }

        public static function search($word) {

            $query = $this->objDb->prepare('SELECT * FROM Produto WHERE nome_produto like %?%;');
            $query->bind_param("s", $word);

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