<?php
require 'db.php';

if(isset($_POST['search']) && isset($_POST['buscar']) && !empty($_POST['search'])){
    $busca = clean($_POST['search']);
    /* $busca = '%'.clean($_POST['search']).'%'; */

    $sql= $conn2->prepare("SELECT * FROM tb_agenda WHERE name LIKE CONCAT('%',?,'%') OR tel LIKE CONCAT('%',?,'%')");
    $sql->execute(Array($busca,$busca));
    /* $sql= $conn2->prepare("SELECT * FROM tb_agenda WHERE name LIKE ? OR tel LIKE ?");
    $sql->execute(Array($busca,$busca)); */
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 1 - Pesquisar</title>

    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        table,th,td{border: 1px solid;}
        table{width:600px;text-align:center;border-collapse:collapse;margin-top:20px;}
        tr{background-color: #c6c6c6;}
        tr:nth-child(even){background-color: #fff;}
        td{padding:3px 0;}
    </style>
</head>
<body style="width: 100vw; height: 100vh; display: flex; justify-content: center; align-items: center; flex-direction: column;">
<h1 style="font-size: 1.5rem;margin-bottom:10px;">Pesquisar</h1>

<form method="post" style="display: flex; flex-direction: column; row-gap: .5rem;">
    <label><strong>Pesquisar:</strong><input type="text" id="search" name="search" required></label>

    <input type="submit" value="Buscar" name="buscar" style="width: 235px;">
</form>

<?php
if(isset($sql)){
    echo "<table><tr><td>ID</td><td>NOME</td><td>TELEFONE</td></tr>";

    if($sql->rowCount() > 0){
        while($dados = $sql->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>{$dados['id']}</td>";
            echo "<td>{$dados['name']}</td>";
            echo "<td>{$dados['tel']}</td>";
            echo "</tr>";
        }
    }else{
        echo "no tienes cadastrados!";
    }

    echo "</table>";
}
?>
</body>
</html>