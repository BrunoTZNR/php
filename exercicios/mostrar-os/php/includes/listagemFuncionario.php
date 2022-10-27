<?php
    $resultado = '';

    if(isset($_GET['sucess'])){
        switch($_GET['sucess']){
            case 'cadastro':
                $cadastro = "Funcionario(a) cadastrado com sucesso!";
            break;
            case 'alter':
                $alter = "Funcionario(a) alterado com sucesso!";
            break;
            case 'delete':
                $delete = "Funcionario(a) deletado com sucesso!";
            break;
        }
    }

    if(isset($_GET['err'])){

    }
    
    $query = $conn->prepare("SELECT * FROM tb_funcionario");
    $query->execute();

    if($query->rowCount() > 0){
        while($dados = $query->fetch(PDO::FETCH_ASSOC)){
            $resultado .= "<tr>
                <td>{$dados['id']}</td>
                <td><a href='./detalhes/detalheFuncionario.php?id=".$dados['id']."'>{$dados['nome']}</a></td>
                <td>{$dados['porcentagem']}%</td>
            </tr>";
        }
    }else{
        $resultado = "<tr><td colspan='3'>no tienes cadastrados!</td></tr>";
    }
?>

<main>
    <section class="main_container">
        <a class="cadFunc" href="./cadastrar/cadastrarFuncionario.php">Cadastrar Funcionario <i class="fa-solid fa-square-plus fa-1x"></i></a>

        <span class="status" <?php if(isset($_GET['sucess'])){echo "";}else{echo "hidden";} ?>><?php if(isset($cadastro)){echo $cadastro;} if(isset($alter)){echo $alter;} if(isset($delete)){echo $delete;} ?></span>

        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>PORCENTAGEM</td>
                </tr>
            </thead>

            <tbody>
                <?=$resultado?>
            </tbody>
        </table>
    </section>
</main>