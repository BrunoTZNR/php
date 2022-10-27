<?php

    //`$_POST` -> Pega informações que foram enviados atraves de um formulário, ele não passa as informação na url da página.
    if (isset($_POST['nome']) && isset($_POST['idade'])){
        $nome=limpaPost($_POST['nome']);
        $idade=limpaPost($_POST['idade']);
        echo "<h2>Nome: $nome <br> Idade: $idade</h2>";
    }
    
    function limpaPost($valor){
        //`trim($variableName)` -> Tira os espaços em branco no inicio e final do valor, e caracteres especiais ex: <br>, /n;
        $valor=trim($valor);
        //`stripslashes($variableName)` -> Tira as barras;
        $valor=stripslashes($valor);
        $valor=htmlspecialchars($valor);
        return $valor;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Método POST</h1>

    <form method="post" action="recebe_post.php">
        <input type="text" name="nome" placeholder="Digite seu nome aqui"><br>
        <input type="text" name="idade" placeholder="Digite seu idade aqui">
        <br><hr><button type="submit">Enviar</button>
    </form>

</body>
</html>