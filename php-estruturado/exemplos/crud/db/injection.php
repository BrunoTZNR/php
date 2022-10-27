<?php
    //sql injection
    if(isset($_POST['salvar'])&&isset($_POST['nome'])&&isset($_POST['email'])){
        $nome = limparPost($_POST['nome']);
        $email = limparPost($_POST['email']);
        $data = date('Y-m-d');

        //validação de campo vazio
        if($nome==""||$nome==null){
            echo "<b style='color:red'>Nome não pode ser vazio</b>";
            exit();
        }
        if($email==""||$email==null){
            echo "<b style='color:red'>Email não pode ser vazio</b>";
            exit();
        }

        //validações nome e email
        if(!preg_match("/^[a-zA-ZÀ-ú]*$/", $nome)){
            echo "<b style='color:red'>Somente permitido letras</b>";
            exit();
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<b style='color:red'>Formato de email inválido!</b>";
            exit();
        }
        
        $sql = $conn->prepare("INSERT INTO cliente VALUES (DEFAULT,?,?,?)");
        $sql->execute([$nome, $email, $data]);
        
        echo "<b style='color:green'>Cliente inserido com sucesso!</b>";
    }
?>