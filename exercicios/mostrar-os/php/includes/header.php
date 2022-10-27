<?php
    switch(TITLE){
        case 'Mostrar':
            $css = '<link rel="stylesheet" href="../assets/css/style_mostrar.css">';
            $titulo = 'CADASTRAR';
            $nav = 'cadastrar.php';
        break;
        case 'Cadastrar':
            $css = '<link rel="stylesheet" href="../assets/css/style_cadastrar.css">';
            $titulo = 'MOSTRAR';
            $nav = 'mostrar.php';
        break;
        case 'Funcionario':
            $css = '<link rel="stylesheet" href="../assets/css/style_funcionario.css">';
            $titulo = 'MOSTRAR';
            $nav = 'mostrar.php';
        break;
        case 'Func':
            $css = '<link rel="stylesheet" href="./../../assets/css/style_funcionario.css">';
            $titulo = 'FUNCIONARIO';
            $nav = '../funcionario.php';
        break;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <?php 
        if(TITLE == 'Func'){
            echo '<link rel="stylesheet" href="./../../assets/css/style.css">';
        }else{
            echo '<link rel="stylesheet" href="../assets/css/style.css">';
        }

        echo $css;
    ?>

    <script src="https://kit.fontawesome.com/ab587c5cd2.js" crossorigin="anonymous" defer></script>

    <title><?=TITLE?></title>
</head>
<body>
    <header>
        <section class="header_container">
            <ul>
                <li>
                    <h2>Os's</h2>
                </li>
                
                <div>
                    <li>
                        <a href=<?=$nav?>><?=$titulo?></a>
                    </li>

                    <?php
                        if(TITLE == 'Mostrar'){echo "<li><a href='funcionario.php'>FUNCIONARIO</a></li>";}
                    ?>
                </div>
            </ul>
        </section>
    </header>

    