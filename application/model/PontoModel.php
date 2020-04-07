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
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('INSERT INTO Ponto (matricula_funcionario, entrada_funcionario, saida_funcionario) VALUES (?, ?, ?);');
            $query->bind_param("sss", $novoPonto->getMatriculaFuncionario(), $novoPonto->getEntrada(), $novoPonto->getSaida());
            $runQuery = $query->execute();

            if($runQuery)
                return true;
            else
                return false;
        }

        function selectAll() {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Ponto');
            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }

        function selectByID($idPonto) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Ponto WHERE ID_Ponto = ?;');
            $query->bind_param("s", $idPonto);

            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }     
        
        function selectByFuncionario($matriculaFuncionario) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Ponto WHERE matricula_funcionario = ?;');
            $query->bind_param("s", $matriculaFuncionario);

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