<?php
    require '../utils/db.php';

    class PontoModel {
        private $matriculaFuncionario;
        public function setMatriculaFuncionario($matriculaFuncionario) { $this->matriculaFuncionario = $matriculaFuncionario; }
        public function getMatriculaFuncionario() { return $this->matriculaFuncionario; }

        private $entrada;
        public function setEntrada($entrada) { $this->entrada = $entrada; }
        public function getEntrada() { return $this->entrada; }

        private $saida;
        public function setSaida($saida) { $this->saida = $saida; }
        public function getSaida() { return $this->saida; }

        public static function cadastrar($novoPonto) {
            if($query = $this->conn->prepare('INSERT INTO Ponto (matricula_funcionario, entrada_funcionario, saida_funcionario) VALUES (?, ?, ?);')){
                $query->bind_param("sss", $this->novoPonto, $this->novoPonto, $this->novoPonto);
                $runQuery = $query->execute();
                if($runQuery)
                return true;
            else
                return false;
        }    
            }
             
        public function searchByID($word) {
            $word = '%'.$word.'%';
            
            if($query = $this->conn->prepare('SELECT * FROM Ponto WHERE ID_Ponto like ?')) {
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
            
            if($query = $this->conn->prepare('SELECT * FROM Ponto WHERE matricula_funcionario like ?')) {
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