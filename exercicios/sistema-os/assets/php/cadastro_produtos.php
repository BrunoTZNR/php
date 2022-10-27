<?php
    require('../db/conexao.php');
    require('./functions.php');

    if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['repetir_senha'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $repetir_senha = $_POST['repetir_senha'];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>OS's - LOGIN</title>

    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" async></script>
</head>
<body>
    <main>
        <section class="container-left">
            <div class="container-a"></div>
            <div class="container-b"></div>
        </section>

        <section class="container-right">
            <div class="container-formulario">
                <form method="post">
                    <h1>CADASTRO</h1>

                    <label class="label_nome" for="nome">nome</label>
                    <input class="nome" type="text" name="nome" id="nome" required>
                    <span class="erro_nome" hidden>Digite um nome</span>

                    <label class="label_sobrenome" for="sobrenome">sobrenome</label>
                    <input class="sobrenome" type="text" name="sobrenome" id="sobrenome" required>
                    <span class="erro_sobrenome" hidden>Digite um nome</span>

                    <label class="label_email" for="email">e-mail</label>
                    <input class="email" type="email" name="email" id="email" required>
                    <span class="erro_email" hidden>Digite um nome</span>

                    <label class="label_senha" for="senha">senha</label>
                    <input class="senha" type="password" name="senha" id="senha" required>
                    <span class="erro_senha" hidden>Digite um nome</span>

                    <label class="label_repetir_senha" for="repetir_senha">repetir senha</label>
                    <input class="repetir_senha" type="password" name="repetir_senha" id="repetir_senha" required>
                    <span class="erro_repetir_senha" hidden>Digite um nome</span>

                    <p class="termos">Ao cadastrar você concorda com os <a href="#termos">termos de uso</a> e também pela
                        <a href="#politica">política de privacidade</a>.</p>

                    <input class="cadastrar" type="submit" value="Cadastrar">
                </form>
            </div>
        </section>
    </main>
</body>
</html>