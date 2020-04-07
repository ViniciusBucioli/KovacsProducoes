<?php
    require_once '../model/PortifolioModel.php';

    $arquivo = $_POST['Arquivo'];
    $nome = $_POST['Nome'];

    $novoPortifolio = new PortifolioModel();
    $novoPortifolio->setArquivo($arquivo);
    $novoPortifolio->setNome($nome);

    if(PortifolioModel::cadastrar($novoPortifolio))
        header('');
    else
        header('');
?>

<?php
    require_once '../model/PortifolioModel.php';

    $nome = $_POST['Nome'];

    $respostaModel = PortifolioModel::selectAll();
    $respostaModel = PortifolioModel::selectByNome($nome);

    if($respostaModel == false)
        header('');
    else
        echo $respostaModel;
?>