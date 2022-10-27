<?php
    //processo de atualização
    if(isset($_POST['atualizar'])&&isset($_POST['id_editado'])&&isset($_POST['nome_editado'])&&isset($_POST['email_editado'])){
        $id=limparPost($_POST['id_editado']);
        $nome=limparPost($_POST['nome_editado']);
        $email=limparPost($_POST['email_editado']);

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

        //atualizando update
        $sql = $conn->prepare("UPDATE cliente SET nome=?, email=? WHERE id_cliente=?");
        $sql->execute([$nome,$email,$id]);

        echo "Atualizado ".$sql->rowCount()." registros!";
    }
?>