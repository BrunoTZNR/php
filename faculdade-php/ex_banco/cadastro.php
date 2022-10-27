<?php
require 'db.php';

echo "<html lang='pt-br'>
<head>
<style>
table{border-collapse: collapse;width: auto;}
tr:nth-child(even){background:#c6c6c6;}
</style>
</head>
<body>
<table>
<tr>
<th>id_user</th>
<th>nm_user</th>
<th>pass_user</th>
</tr>";

/** @var TYPE_NAME $conn */
$sql = $conn->prepare("SELECT * FROM tb_user");
$sql->execute();

if($sql->rowCount() > 0){
    while($dados = $sql->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>{$dados['id_user']}</td>";
        echo "<td>{$dados['nm_user']}</td>";
        echo "<td>{$dados['pass_user']}</td>";
        echo "</tr>";
    }
}else{
    echo "no tienes cadastrados!";
}

echo "</table></body></html>";