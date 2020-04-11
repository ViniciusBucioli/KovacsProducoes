<?php
    require '../utils/db.php';

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

                return json_encode($myArray);
            } else {
                return false;
            }
        }
        // testar
        public static function selectByCPF($cpf) {
            // $objBD = new db();
            // $link = $objBD->mysqlConnect();
            if($query = $this->conn->prepare('SELECT * FROM Cliente WHERE CPF = ?;')){
            $query->bind_param("s", $cpf);
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

                return json_encode($myArray);
            } else {
                return false;
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

                return json_encode($myArray);
            } else {
                return false;
            }
        }

    }
