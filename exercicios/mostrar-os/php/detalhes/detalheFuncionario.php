<?php
    require __DIR__.'./../db/conexao.php';
    require __DIR__.'./../functions.php';

    define('TITLE','Func');

    include __DIR__.'./../includes/header.php';

    $idFunc = clean($_GET['id']);

    $query = $conn->prepare("SELECT * FROM tb_funcionario WHERE id = ?");
    $query->execute(Array($idFunc));

    while($dados = $query->fetch(PDO::FETCH_ASSOC)){
        $nome = $dados['nome'];
        $porcentagem = $dados['porcentagem'];
    }

    if(isset($_POST['alterar']) && !empty($_POST['nome']) && !empty($_POST['porcentagem'])){
        $nome = clean($_POST['nome']);
        $porcentagem = clean($_POST['porcentagem']);
        
        $query = $conn->prepare("UPDATE tb_funcionario SET nome=?, porcentagem=? WHERE id=?");
        $query->execute(Array($nome,$porcentagem,$idFunc));
        header('location: ./../funcionario.php?sucess=alter');
    }/*else{
        header('location: ./../funcionario.php?err=alter');
    }*/

    if(isset($_POST['deletar'])){
        $query = $conn->prepare("DELETE FROM tb_funcionario WHERE id=?");
        $query->execute(Array($idFunc));

        header('location: ./../funcionario.php?sucess=delete');
    }/*else{
        header('location: ./../funcionario.php?err=delete');
    }*/
?>
<main>
    <section style="width: auto;margin: 0 auto;" class="main_container">
        <form class="cadFuncForm" method="post">
            <h3>cadastro - funcionario</h3>

            <section class="form_container">
                <div>
                    <label>Nome: <input type="text" name="nome" value="<?=$nome?>" required></label>

                    <label>Porcentagem: <input type="text" name="porcentagem" maxlength="2" value="<?=$porcentagem?>" required></label>
                </div>

                <div>
                    <input style="margin:0;" type="submit" value="Alterar" name="alterar">
                    <input style="margin:0;" type="submit" value="Deletar" name="deletar">
                </div>
            </section>
        </form>
    </section>
</main>

<?php
    include __DIR__.'./../includes/footer.php';
?>