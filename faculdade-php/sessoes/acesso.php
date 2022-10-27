<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
        <link rel="stylesheet" href="style.css">
        <?php
            require __DIR__.'./conexao.php';

            if((!isset($_SESSION['login']) == TRUE) && (!isset($_SESSION['senha']) == TRUE)){
                session_destroy();
                echo "<script>
                    alert('esta página so pode ser acessada com um usuário logado!'); 
                    window.location.href='index.php';
                    </script>";
            }

            $logado = $_SESSION['login'];
        ?>
    </head>
    <body>
        <div>Somentos usuários logados podem ver isto!</div>
        <div><a href="logout.php">Logout</a></div>
    </body>
</html>