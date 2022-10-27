<?php
    /* cookies */
    
    //`setcookie(nomeChave, Valor, Validade)` -> Cria um cookie.
    setcookie('nome','Bruno',time()+(86400 * 30)); //cria um cookie;
    setcookie('nome','Mateus',time()+(86400 * 30)); //modifica um cookie;
    setcookie('nome','',time() - 3600); //apaga um cookie;
    //o cookie geralmente é setado apenas uma vez;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cookies</title>
</head>
<body>
    <h1>Cokkies 🍪</h1>

    
    <?php
        if(count($_COOKIE) > 0){
            echo "Tem cookies";
        }else{
            echo "Não tem cookies";
        }

        
        if(isset($_COOKIE['nome'])){
            $nome = $_COOKIE['nome'];
            echo "O nome é $nome";
        }else{
            echo "Não tem nenhum cookie";
        }
    ?>
</body>
</html>