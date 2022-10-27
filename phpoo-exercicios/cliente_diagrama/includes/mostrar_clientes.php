<?php
    define('TITLE','Clientes cadastrados');
    define('NAV','cadastrar');
    $resultados = '';

    if(isset($_GET['field'])){$tipo_cli = $_GET['field'];}else{$tipo_cli='';}

    $resultados = strlen($resultados) ? $resultados : '<tr><td class="nada" colspan="7">Nenhum cliente encontrado</td></tr>'
?>

<main>
    <header>
        <section class="container_header">
            <h1>Cliente Diagrama</h1>

            <nav>
                <ul>
                    <li><a href="cadastrar.php"><?=NAV?></a></li>
                </ul>
            </nav>
        </section>
    </header>

    <section class="container">
        <h3 class="title"><?=TITLE?></h3>

        <form class="cadastros" method="get">
            <input class="search_input" type="text" name="field" placeholder="Digite aqui">
            <input class="search_submit" type="submit" value="Pesquisar" name="search">
        </form>

        <table>
            <thead>
                <tr>
                    <?php
                        switch($tipo_cli){
                            case 'pj':
                                echo '<td>ID</td><td>NOME</td><td>TELEFONE</td><td>ENDEREÇO</td><td>CNPJ</td><td>NOME EMPRESA</td>';
                            break;
                            case 'pf':
                                echo '<td>ID</td><td>NOME</td><td>TELEFONE</td><td>ENDEREÇO</td><td>CPF</td>';
                            break;
                            default:
                                echo '<td>ID</td><td>NOME</td><td>TELEFONE</td><td>ENDEREÇO</td><td>CPF</td><td>CNPJ</td><td>NOME EMPRESA</td>';
                            break;
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?=$resultados?>
                </tr>
            </tbody>
        </table>
    </section>
</main>