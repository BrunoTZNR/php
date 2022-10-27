<?php
    //selecionando dados da tabela
    $sql = $conn->prepare("SELECT * FROM cliente");
    $sql->execute();
    $dados= $sql->fetchAll();
?>