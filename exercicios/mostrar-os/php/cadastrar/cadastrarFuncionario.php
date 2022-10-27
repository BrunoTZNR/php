<?php
    require __DIR__.'./../db/conexao.php';
    require __DIR__.'./../functions.php';

    define('TITLE','Func');

    include __DIR__.'./../includes/header.php';

    if(isset($_POST['cadastrar']) && !empty($_POST['nome']) && !empty($_POST['porcentagem'])){
        $nome = clean($_POST['nome']);
        $porcentagem = clean($_POST['porcentagem']);

        $query = $conn->prepare("INSERT INTO tb_funcionario (nome, porcentagem) VALUES (?,?)");
        $query->execute(Array($nome,$porcentagem));

        header('location: ./../funcionario.php?sucess=cadastro');
    }/*else{
        header('location: ./../funcionario.php?err=cadastro');
    }*/
?>
<main>
    <section style="width: 500px;margin: 0 auto;" class="main_container">
        <form class="cadFuncForm" method="post">
            <h3>cadastro - funcionario</h3>

            <section class="form_container">
                <div>
                    <label>Nome: <input type="text" name="nome" required></label>

                    <label>Porcentagem: <input type="text" name="porcentagem" maxlength="2" required></label>
                </div>

                <input type="submit" value="Cadastrar" name="cadastrar">
            </section>
        </form>
    </section>
</main>

<?php
    include __DIR__.'./../includes/footer.php';
?>