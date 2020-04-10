<?php
    require '../../utils/db.php';

    class ProdutoModel {
        private $id;
        public function setId($id) { $this->id = $id; }
        public function getId() { return $this->id; }

        private $nome;
        public function setNome($nome) { $this->nome = $nome; }
        public function getNome() { return $this->nome; }

        private $categoria;
        public function setCategoria($categoria) { $this->categoria = $categoria; }
        public function getCategoria() { return $this->categoria; }

        private $preco;
        public function setPreco($preco) { $this->preco = $preco; }
        public function getPreco() { return $this->preco; }

        private $descricao;
        public function setDescricao($descricao) { $this->descricao = $descricao; }
        public function getDescricao() { return $this->descricao; }

        private $conn;

        function __construct(){
            $db = new db();
            $this->conn = $db->connection;
        }
        //está funcionando
        public function cadastrar($novoProduto) {
            $nome = $novoProduto->getNome();
            $categoria = $novoProduto->getCategoria();
            $preco = $novoProduto->getPreco();
            $descricao = $novoProduto->getDescricao();

            if($query = $this->conn->prepare('INSERT INTO Produto (nome, categoria, preco, descricao) VALUES (?, ?, ?, ?);')){
                $query->bind_param('ssss', $nome, $categoria, $preco, $descricao);
                $result = $query->execute();
                if($result)
                    return true;
                else
                    return false;
                $this->conn->close();
            } else {
                $error = $this->conn->errno . ' ' . $this->conn->error;
                return $error;
            }
        }
        
        public function atualizar($produto) {
            $id = $produto->getId();
            $nome = $produto->getNome();
            $categoria = $produto->getCategoria();
            $preco = $produto->getPreco();
            $descricao = $produto->getDescricao();

            if($query = $this->conn->prepare('UPDATE Produto SET nome = ?, categoria = ?, preco = ?, descricao = ? WHERE id = ?')){
                $query->bind_param('sssss', $nome, $categoria, $preco, $descricao, $id);
                $result = $query->execute();
                if($result)
                    return true;
                else
                    return false;
                $this->conn->close();
            } else {
                $error = $this->conn->errno . ' ' . $this->conn->error;
                return $error;
            }
        }
        
        public function selectAll() {

            $query = $this->conn->prepare('SELECT * FROM Produto');
            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }
        
        public function selectByID($idProduto) {

            $query = $this->conn->prepare('SELECT * FROM Produto WHERE id_produto = ?;');
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
        
        public function selectByNome($nome) {

            $query = $this->conn->prepare('SELECT * FROM Produto WHERE nome_produto = ?;');
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

        public function selectByCategory($categoria) {

            $query = $this->conn->prepare('SELECT * FROM Produto WHERE categoria_produto = ?;');
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

        //está funcionando
        public function search($word) {
            $word = '%'.$word.'%';
            
            if($query = $this->conn->prepare('SELECT * FROM Produto WHERE nome like ?')) {
                $query->bind_param("s", $word);
                $query->execute();

                $result = $query->get_result();
                //echo $result;
                if ($result->num_rows > 0) {
                    $rows = [];
                    while($row = $result->fetch_assoc()) {
                        $rows[] = $row;
                    }
                    return json_encode($this->utf8size($rows));
                } else {
                    return "";
                }
                $this->conn->close();
            } else {
                $error = $this->conn->errno . ' ' . $this->conn->error;
                return $error;
            }
        }
        private function utf8size($d) {
            if (is_array($d)) {
                foreach ($d as $k => $v) {
                    $d[$k] = $this->utf8size($v);
                }
            } else if (is_string ($d)) {
                return utf8_encode($d);
            }
            return $d;
        }

    }
?>