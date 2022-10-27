<?php

    require __DIR__.'/vendor/autoload.php';

    define('TITLE','Cadastrar vaga');

    use \App\Entity\Vaga;
    $obVaga = new Vaga;

    //validação do post
    if(isset($_POST['titulo']) && !empty($_POST['titulo']) && isset($_POST['descricao']) && !empty($_POST['descricao']) && isset($_POST['ativo']) && !empty($_POST['ativo'])){
        $obVaga->titulo = $_POST['titulo'];
        $obVaga->descricao = $_POST['descricao'];
        $obVaga->ativo = $_POST['ativo'];

        $obVaga->cadastrar();
        
        header('location: index.php?status=success');
        exit;
    }

    include __DIR__.'./includes/header.php';
    include __DIR__.'./includes/formulario.php';
    include __DIR__.'./includes/footer.php';


?>