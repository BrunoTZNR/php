<?php

    require __DIR__.'/vendor/autoload.php';

    define('TITLE','Editar vaga');

    use \App\Entity\Vaga;

    if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }

    //consulta vaga
    $obVaga = Vaga::getVaga($_GET['id']);

    //validação da vaga
    if(!$obVaga instanceof Vaga){
        header('location: index.php?status=error');
        exit;
    }

    //validação do post
    if(isset($_POST['titulo']) && !empty($_POST['titulo']) && isset($_POST['descricao']) && !empty($_POST['descricao']) && isset($_POST['ativo']) && !empty($_POST['ativo'])){
        $obVaga->titulo = $_POST['titulo'];
        $obVaga->descricao = $_POST['descricao'];
        $obVaga->ativo = $_POST['ativo'];
        $obVaga->atualizar();
        
        header('location: index.php?status=success');
        exit;
    }

    include __DIR__.'./includes/header.php';
    include __DIR__.'./includes/formulario.php';
    include __DIR__.'./includes/footer.php';


?>