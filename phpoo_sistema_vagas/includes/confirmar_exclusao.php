<main>
    <section class="my-2">
       
    </section>

    <h2 class="mt-3">Excluir vaga</h2>

    <form method="post">
        <div class="form-group my-2">
            <p>Você deseja realmente excluir a vaga <strong><?=$obVaga->titulo?></strong>?</p>
        </div>

        <div class="form-group my-2">
            <a href="index.php" style="text-decoration:none;">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>

            <button class="btn btn-danger" name="excluir" type="submit">Excluir</button>
        </div>
    </form>
</main>