<?php
require 'db.php';

if(isset($_POST["agendar"]) && isset($_POST["tel"]) && isset($_POST["name"]) && !empty($_POST["name"]) && !empty($_POST["tel"])){
    $name = clean($_POST["name"]);
    $tel = clean($_POST["tel"]);

    if(strlen($_POST["tel"]) < 9){
        $erro_tel="Digite um número de telefone com 9 digitos!";
    }

    if(strlen($_POST["name"]) < 2){
        $erro_name="Digite um nome válido!";
    }

    if(!isset($erro_name) && !isset($erro_tel)){
        /** @var TYPE_NAME $conn2 */
        $sql = $conn2->prepare("INSERT INTO tb_agenda VALUES (DEFAULT,?,?)");
        $sql->execute(array($name, $tel));
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 1 - Agendar</title>

    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
    </style>
</head>
<body style="width: 100vw; height: 100vh; display: flex; justify-content: center; align-items: center; flex-direction: column;">
<h1 style="font-size: 1.5rem;margin-bottom:10px;">Agendar</h1>

<form method="post" style="display: flex; flex-direction: column;">
    <label style="display: flex; flex-direction: column;margin-bottom:5px;">Nome:<input type="text" id="name" name="name"
            <?php if(isset($erro_name) && isset($_POST["name"])){echo 'value="'.$_POST['name'].'"';} ?> required>
    </label>
    <span><?php if(isset($erro_name)){echo $erro_name;} ?></span>

    <label style="display: flex; flex-direction: column;margin-bottom:5px;">Telefone:<input type="text" id="tel" name="tel"
            <?php if(isset($erro_tel) && isset($_POST["tel"])){echo 'value="'.$_POST['tel'].'"';} ?> required>
    </label>
    <span><?php if(isset($erro_tel)){echo $erro_tel;} ?></span>

    <input type="submit" value="Salvar" name="agendar" style="width: 235px;">
</form>

<h3><a style="background:#c6c6c6;padding:5px 10px;color:#fff;text-decoration:none;display:block;margin-top:10px;" href="pesquisar.php">Pesquisar</a></h3>
</body>
</html>