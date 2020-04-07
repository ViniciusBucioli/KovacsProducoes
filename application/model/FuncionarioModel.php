<?php
    require '../utils/db.php';

    class FuncionarioModel {
        $cpf;
        public function setCpf($cpf) { $this->cpf = $cpf; }
        public function getCpf() { return $this->cpf; }

        $nome;
        public function setNome($nome) { $this->nome = $nome; }
        public function getNome() { return $this->nome; }

        $cargo;
        public function setCargo($cargo) { $this->cargo = $cargo; }
        public function getCargo() { return $this->cargo; }

        $horaTrabalho;
        public function setHoraTrabalho($horaTrabalho) { $this->horaTrabalho = $horaTrabalho; }
        public function getHoraTrabalho() { return $this->horaTrabalho; }

        $salario;
        public function setSalario($salario) { $this->salario = $salario; }
        public function getSalario() { return $this->salario; }

        $telefone;
        public function setTelefone($telefone) { $this->telefone = $telefone; }
        public function getTelefone() { return $this->telefone; }

        $endereco;
        public function setEndereco($endereco) { $this->endereco = $endereco; }
        public function getEndereco() { return $this->endereco; }

        $meta;
        public function setMeta($meta) { $this->meta = $meta; }
        public function getMeta() { return $this->meta; }

        $comissao;
        public function setComissao($comissao) { $this->comissao = $comissao; }
        public function getComissao() { return $this->comissao; }

        $vendas;
        public function setVendas($vendas) { $this->vendas = $vendas; }
        public function getVendas() { return $this->vendas; }

        public static function cadastrar($novoFuncionario) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('INSERT INTO Funcionario (CPF_funcionario, nome_funcionario, cargo_funcionairo, hora_trabalho_funcionario, salario_funcionario, telefone_funcionario, endereco_funcionario, meta_funcionario, comissao_funcionario, vendas_funcionario) VALUES VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
            $query->bind_param("ssssssssss", $novoFuncionario->getCpf(), $novoFuncionario->getNome(), $novoFuncionario->getCargo(), $novoFuncionario->getHoraTrabalho(), $novoFuncionario->getSalario(), $novoFuncionario->getTelefone(), $novoFuncionario->getEndereco(), $novoFuncionario->getMeta(), $novoFuncionario->getComissao(), $novoFuncionario->getVendas());
            $runQuery = $query->execute();

            if($runQuery)
                return true;
            else
                return false;
        }

        public static function selectAll() {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Funcionario');
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

            $query = $link->prepare('SELECT * FROM Funcionario WHERE CPF_funcionario = ?;');
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

            $query = $link->prepare('SELECT * FROM Funcionario WHERE nome_funcionario = ?;');
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