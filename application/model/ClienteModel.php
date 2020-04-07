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

        public static function cadastrar($novoCliente) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('INSERT INTO Cliente (CPF, nome_cliente, email_cliente, telefone_cliente, endereco_cliente) VALUES (?, ?, ?, ?, ?);');
            $query->bind_param("sssss", $novoCliente->getCpf(), $novoCliente->getNome(), $novoCliente->getEmail(), $novoCliente->getTelefone(), $novoCliente->getEndereco());
            $runQuery = $query->execute();

            if($runQuery)
                return true;
            else
                return false;
        }
        
        public static function selectAll() {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Cliente');
            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }
        
        public static function selectByCPF($cpf) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Cliente WHERE CPF = ?;');
            $query->bind_param("s", $cpf);

            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }
        
        public static function selectByName($nome) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Cliente WHERE nome_cliente = ?;');
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

    }
?>