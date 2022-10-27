<?php
    require('./db/conexao.php');

    //VERIFICAÇÃO DE AUTENTICAÇÃO
    $user=auth($_SESSION['TOKEN']);

    if($user){
        echo "<h1>SEJA BEM-VINDO <b style='color:red;'>".$user['nome']."!</b></h1>";
        echo "<br><br><a style='background:green;color:#fff;padding:1.3rem;border-radius:.35rem;text-decoration:none;' href='logout.php'>Sair do sistema</a>";
    }else{
        header('location: index.php');
    }

    // //VERIFICAR SE TEM AUTORIZAÇÃO
    // $sql=$conn->prepare("SELECT * FROM usuarios WHERE token=? LIMIT 1");
    // $sql->execute(array($_SESSION['TOKEN']));
    // $usuario=$sql->fetch(PDO::FETCH_ASSOC);
    // //SE NAO ENCONTRAR O USUARIO
    // if(!$usuario){
    //     header('location: index.php');
    // }else{
    //     echo "<h1>SEJA BEM-VINDO <b style='color:red;'>".$usuario['nome']."!</b></h1>";
    //     echo "<br><br><a style='background:green;color:#fff;padding:1.3rem;border-radius:.35rem;text-decoration:none;' href='logout.php'>Sair do sistema</a>";
    // }
?>