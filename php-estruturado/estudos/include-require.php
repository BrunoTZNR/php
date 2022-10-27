<?php
    /* require e include */
    //_once evita recarregamento do arquivo

    //`include('diretorio');` -> Inclui uma arquivo php dentro de um arquivo php, caso não consiga ele retorna um warning e continua o script.
    include_once('include-test.php'); //Olá mundo!

    //`require('diretorio');` -> Inclui uma arquivo php dentro de um arquivo php, caso nao consiga ele retorna um erro fatal e para o script.
    require_once('require-test.php'); //Olá mundo!

?>