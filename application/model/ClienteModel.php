<?php
    require '../../utils/db.php';
    require '../../utils/global_functions.php';
    
    class ClienteModel {
        
        private $cpf;
        public function setCpf($cpf) { $this->cpf = $cpf; }
        public function getCpf() { return $this->cpf; }

        private $nome;
        public function setNome($nome) { $this->nome = $nome; }
        public function getNome() { return $this->nome; }

        private $email;
        public function setEmail($email) { $this->email = $email; }
        public function getEmail() { return $this->email; }

        private $telefone;
        public function setTelefone($telefone) { $this->telefone = $telefone; }
        public function getTelefone() { return $this->telefone; }

        private $endereco;
        public function setEndereco($endereco) { $this->endereco = $endereco; }
        public function getEndereco() {return $this->endereco; }

        private $conn;
        function __construct()
        {
            $db = new db();
            $this->conn = $db->connection;
        }

        //testado e confirmado
        public function cadastrar() {
            if($query = $this->conn->prepare('INSERT INTO Cliente (cpf, nome, email, telefone, endereco) VALUES (?, ?, ?, ?, ?);')){
            $query->bind_param("sssss",$this->cpf, $this->nome, $this->email, $this->telefone, $this->endereco);
            $runQuery = $query->execute();
            if($runQuery)
                return true;
            else
                return false;
            $this->conn->close();
        }else {
            $error = $this->conn->errno . ' ' . $this->conn->error;
            return $error;
        }
    }
        //testado e confirmado
        public function searchByCPF($word) {
            $word = '%'.$word.'%';
            
            if($query = $this->conn->prepare('SELECT * FROM Cliente WHERE cpf like ?')) {
                $query->bind_param("s", $word);
                $query->execute();

        function __construct(){
            $db = new db();
            $this->conn = $db->connection;
        }

        //testar
        public static function cadastrar($novoCliente) {
            $cpf = $novoCliente->getCpf();
            $nome = $novoCliente->getNome();
            $email = $novoCliente->getEmail();
            $telefone = $novoCliente->getTelefone();
            $endereco = $novoCliente->getEndereco();

            if($query = $this->conn->prepare('INSERT INTO Cliente (CPF, nome_cliente, email_cliente, telefone_cliente, endereco_cliente) VALUES (?, ?, ?, ?, ?);')){
                $query->bind_param("sssss",$cpf, $nome, $email, $telefone, $endereco);
                $runQuery = $query->execute();
                if($runQuery)
                    return true;
                else
                    return false;
                    $this->conn->close();
            }else {
                $error = $this->conn->errno . ' ' . $this->conn->error;
                return $error;
            }
        }
        // testar
        public static function selectAll() {
            
            if($query = $this->conn->prepare('SELECT * FROM Cliente'))
            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                $result = $query->get_result();
                //echo $result;
                if ($result->num_rows > 0) {
                    $rows = [];
                    while($row = $result->fetch_assoc()) {
                        $rows[] = $row;
                    }
                    return json_encode(utf8size($rows));
                } else {
                    return "";
                }
                $this->conn->close();
            } else {
                $error = $this->conn->errno . ' ' . $this->conn->error;
                return $error;
            }
        }
        // testar
        public static function selectByName($nome) {
            
            if($query = $this->conn->prepare('SELECT * FROM Cliente WHERE nome_cliente = ?;')){
                $query->bind_param("s", $nome);
                $runQuery = $query->execute();
                if($runQuery)
                return true;
            else
                return false;
                $this->conn->close();
            }
            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

        //testado e confirmado
        public function searchByName($word) {
            $word = '%'.$word.'%';
            
            if($query = $this->conn->prepare('SELECT * FROM Cliente WHERE nome like ?')) {
                $query->bind_param("s", $word);
                $query->execute();

                $result = $query->get_result();
                //echo $result;
                if ($result->num_rows > 0) {
                    $rows = [];
                    while($row = $result->fetch_assoc()) {
                        $rows[] = $row;
                    }
                    return json_encode(utf8size($rows));
                } else {
                    return "";
                }
                $this->conn->close();
            } else {
                $error = $this->conn->errno . ' ' . $this->conn->error;
                return $error;
            }
        }

    }
