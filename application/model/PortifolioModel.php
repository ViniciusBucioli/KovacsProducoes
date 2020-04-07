<?php
    require '../utils/db.php';

    class PortifolioModel {
        private $arquivo;
        public function setArquivo($arquivo) { $this->arquivo = $arquivo; }
        public function getArquivo() { return $this->arquivo; }

        private $nome;
        public function setNome($nome) { $this->nome = $nome; }
        public function getNome() { return $this->nome; }

        public static function cadastrar($novoPortifolio) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('INSERT INTO Portifolio (id_portifolio, arquivo_portifolio, nome_portifolio) VALUES (?, ?);');
            $query->bind_param("ss", $novoPonto->getArquivo(), $novoPonto->getNome()));
            $runQuery = $query->execute();

            if($runQuery)
                return true;
            else
                return false;
        }

        function selectAll() {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Portifolio');
            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }

        function selectByID($idPortifolio) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Portifolio WHERE id_portifolio = ?;');
            $query->bind_param("s", $idPortifolio);

            $runQuery = $query->execute();

            if ($runQuery) {
                while($row = $runQuery->fetch_array(MYSQLI_ASSOC))
                    $myArray[] = $row;

                return json_encode($myArray);
            } else {
                return false;
            }
        }     
        
        function selectByNome($nome) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('SELECT * FROM Portifolio WHERE nome_portifolio = ?;');
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