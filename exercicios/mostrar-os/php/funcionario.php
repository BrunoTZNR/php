<?php
    require __DIR__.'./db/conexao.php';
    require __DIR__.'./functions.php';

    define('TITLE','Funcionario');

    include __DIR__.'./includes/header.php';
    include __DIR__.'./includes/listagemFuncionario.php';
    include __DIR__.'./includes/footer.php';
?>