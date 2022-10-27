<?php
    //configurações gerais
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="sistema_login";

    //conexão
    try{
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo "Falha ao se conectar com o banco!";
    }


    //função para limpar entradas
    function limparPost($dado){
        $dado=trim($dado);
        $dado=stripslashes($dado);
        $dado=htmlspecialchars($dado);
        return $dado;
    }
?>