<main>
    <section class="my-2">
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <div class="form-group my-2">
            <label>Título</label>
            <input class="form-control" type="text" name="titulo" value="<?=$obVaga->titulo?>">
        </div>

        <div class="form-group my-2">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control" rows="5"><?=$obVaga->descricao?></textarea>
        </div>

        <div class="form-group my-2">
            <label>Status</label>
            <div>
                <div class="from-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked>Ativo
                    </label>
                </div>

                <div class="from-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n" <?=$obVaga->ativo == 'n' ? 'checked' : ''?>>Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group my-2">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>
</main>