<?php
require 'db.php';

if(isset($_POST["cadastrar"]) && isset($_POST["name"]) && isset($_POST["cargo"]) && isset($_POST["sal_bruto"]) && isset($_POST["desc_inss"])
    && !empty($_POST["name"]) && !empty($_POST["cargo"]) && !empty($_POST["sal_bruto"]) && !empty($_POST["desc_inss"])){
    $name = clean($_POST["name"]);
    $cargo = clean($_POST["cargo"]);
    $sal_bruto = (float)clean($_POST["sal_bruto"]);
    $desc_inss = (float)clean($_POST["desc_inss"]);
    $sal_liquido= (float)($sal_bruto - $desc_inss);

    if(strlen($_POST["tel"]) < 9){
        $erro_tel="Digite um número de telefone com 9 digitos!";
    }

    if(strlen($_POST["name"]) < 2){
        $erro_name="Digite um nome válido!";
    }

    if(!isset($erro_name) && !isset($erro_cargo) && !isset($erro_sal_bruto) && !isset($erro_desc_inss)){
        /** @var TYPE_NAME $conn3 */
        $sql = $conn3->prepare("INSERT INTO tb_funcionario VALUES (DEFAULT,?,?,?,?,?)");
        $sql->execute(array($name, $cargo, $sal_bruto, $desc_inss, $sal_liquido));
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

    <label style="display: flex; flex-direction: column;margin-bottom:5px;">Cargo:<input type="text" id="cargo" name="cargo"
            <?php if(isset($erro_cargo) && isset($_POST["cargo"])){echo 'value="'.$_POST['cargo'].'"';} ?> required>
    </label>
    <span><?php if(isset($erro_cargo)){echo $erro_cargo;} ?></span>

    <label style="display: flex; flex-direction: column;margin-bottom:5px;">Sálario Bruto:<input type="text" id="sal_bruto" name="sal_bruto"
            <?php if(isset($erro_sal_bruto) && isset($_POST["sal_bruto"])){echo 'value="'.$_POST['sal_bruto'].'"';} ?> required>
    </label>
    <span><?php if(isset($erro_sal_bruto)){echo $erro_sal_bruto;} ?></span>

    <label style="display: flex; flex-direction: column;margin-bottom:5px;">Desconto INSS:<input type="text" id="desc_inss" name="desc_inss"
            <?php if(isset($erro_desc_inss) && isset($_POST["desc_inss"])){echo 'value="'.$_POST['desc_inss'].'"';} ?> required>
    </label>
    <span><?php if(isset($erro_desc_inss)){echo $erro_desc_inss;} ?></span>

    <input type="submit" value="Cadastrar" name="cadastrar" style="width: 235px;">
</form>

<h3><a style="background:#c6c6c6;padding:5px 10px;color:#fff;text-decoration:none;display:block;margin-top:10px;" href="pesquisar.php">Pesquisar</a></h3>
</body>
</html>