<?php
    //deleta um dado
    if(isset($_POST['deletar'])&&isset($_POST['id_deleta'])&&isset($_POST['nome_deleta'])&&isset($_POST['email_deleta'])){
        $id=limparPost($_POST['id_deleta']);
        $nome=limparPost($_POST['nome_deleta']);
        $email=limparPost($_POST['email_deleta']);

        $sql=$conn->prepare("DELETE FROM cliente WHERE id_cliente=? AND nome=? AND email=?");
        $sql->execute([$id,$nome,$email]);

        echo "Deletado com sucesso!";
    }
?>