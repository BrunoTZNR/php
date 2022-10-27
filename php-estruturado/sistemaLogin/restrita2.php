<?php
    require('./db/conexao.php');

    //VERIFICAÇÃO DE AUTENTICAÇÃO
    $user=auth($_SESSION['TOKEN']);

    if($user){
        echo "<h1>ESSA É A PÁGINA RESTRITA 2</h1>";
        echo "<br><br><a style='background:green;color:#fff;padding:1.3rem;border-radius:.35rem;text-decoration:none;' href='logout.php'>Sair do sistema</a>";
    }else{
        header('location: index.php');
    }