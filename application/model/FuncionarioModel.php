<?php
    require '../utils/db.php';

    class FuncionarioModel {
        
        private $cpf;
        public function setCpf($cpf) { $this->cpf = $cpf; }
        public function getCpf() { return $this->cpf; }

        private $nome;
        public function setNome($nome) { $this->nome = $nome; }
        public function getNome() { return $this->nome; }

        private $cargo;
        public function setCargo($cargo) { $this->cargo = $cargo; }
        public function getCargo() { return $this->cargo; }

        private$horaTrabalho;
        public function setHoraTrabalho($horaTrabalho) { $this->horaTrabalho = $horaTrabalho; }
        public function getHoraTrabalho() { return $this->horaTrabalho; }

        private$salario;
        public function setSalario($salario) { $this->salario = $salario; }
        public function getSalario() { return $this->salario; }

        private$telefone;
        public function setTelefone($telefone) { $this->telefone = $telefone; }
        public function getTelefone() { return $this->telefone; }

        private$endereco;
        public function setEndereco($endereco) { $this->endereco = $endereco; }
        public function getEndereco() { return $this->endereco; }

        private $meta;
        public function setMeta($meta) { $this->meta = $meta; }
        public function getMeta() { return $this->meta; }

        private $comissao;
        public function setComissao($comissao) { $this->comissao = $comissao; }
        public function getComissao() { return $this->comissao; }

        private $vendas;
        public function setVendas($vendas) { $this->vendas = $vendas; }
        public function getVendas() { return $this->vendas; }

        public static function cadastrar($novoFuncionario) {
            if($query = $this->conn->prepare('INSERT INTO Funcionario (CPF_funcionario, nome_funcionario, cargo_funcionairo, hora_trabalho_funcionario, salario_funcionario, telefone_funcionario, endereco_funcionario, meta_funcionario, comissao_funcionario, vendas_funcionario) VALUES VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);')){
                $query->bind_param("ssssssssss", $this->novoFuncionario, $this->novoFuncionario, $this->novoFuncionario, $this->novoFuncionario, $this->novoFuncionario, $this->novoFuncionario, $this->novoFuncionario, $this->novoFuncionario, $this->novoFuncionario, $this->novoFuncionario);
                $runQuery = $query->execute();
            }
            

            if($runQuery)
                return true;
            else
                return false;
        }

        public static function selectAll() {
            if($query = $this->conn->prepare('SELECT * FROM Funcionario')){
                $runQuery = $query->execute();
            }
            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }        
        public function searchByCPF($word) {
            $word = '%'.$word.'%';
            
            if($query = $this->conn->prepare('SELECT * FROM Funcionario WHERE cpf like ?')) {
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
        public function searchByName($word) {
            $word = '%'.$word.'%';
            
            if($query = $this->conn->prepare('SELECT * FROM Funcionario WHERE nome like ?')) {
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
?>