<?php
    require('./db/conexao.php');

    if(isset($_GET['cod_confirm']) && !empty($_GET['cod_confirm'])){
        //LIMPAR O GET
        $cod=limparPost($_GET['cod_confirm']);

        //CONSULTAR SE ALGUM USUARIO TEM ESSE CODIGOD E CONFIRMAÇÃO
        $sql=$conn->prepare("SELECT * FROM usuarios WHERE codido_confirmacao=? LIMIT 1");
        $sql->execute(array($cod));
        //FETCH_ASSOC -> pega os dados e os mostra em matriz assossiativa
        $usuario=$sql->fetch(PDO::FETCH_ASSOC);
        if($usuario){
            //ATUALIZAR O STATUS PARA CONFIRMADO
            $status="confirmado";
            $sql=$conn->prepare("UPDATE usuarios SET status=? WHERE codigo_confirmacao=?");
            if($sql->execute(array($status,$cod))){
                header('location: index.php?result=ok');
            }
        }else{
            echo "<h1>Código de confirmação inválido!</h1>";
        }
    }
?>