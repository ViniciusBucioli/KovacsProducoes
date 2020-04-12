<?php
    require '../utils/db.php';
    require '../../utils/global_functions.php';

    class PortifolioModel {
        private $arquivo;
        public function setArquivo($arquivo) { $this->arquivo = $arquivo; }
        public function getArquivo() { return $this->arquivo; }

        private $nome;
        public function setNome($nome) { $this->nome = $nome; }
        public function getNome() { return $this->nome; }

        public function cadastrar() {
            if($query = $this->conn->prepare('INSERT INTO Portifolio (id_portifolio, arquivo_portifolio, nome_portifolio) VALUES (?, ?);')){
                $query->bind_param("ss", $this->novoPonto, $this->novoPonto);
                $runQuery = $query->execute();
                if($runQuery)
                    return true;
                else
                    return false;
                }
                else {
                    $error = $this->conn->errno . ' ' . $this->conn->error;
                    return $error;
                }
            }        
            
        public function searchByID($word) {
            $word = '%'.$word.'%';
            
            if($query = $this->conn->prepare('SELECT * FROM Portifolio WHERE id_portifolio like ?')) {
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
            
            if($query = $this->conn->prepare('SELECT * FROM Portifolio WHERE nome_portifolio like ?')) {
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