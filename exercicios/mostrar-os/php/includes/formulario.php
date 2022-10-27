<?php
    $dt = date('d-m-Y'); //dt_cadastro -> cliente; dt_cadastro -> carro
    $hr = date('H:i:s'); //dt_cadastro -> cliente; dt_cadastro -> carro
?>
<main>
    <section class="main_container">
        <form method="post">
            <h3>cadastro - os</h3>

            <section class="form_conatiner">
                <div class="cliente_container">
                    <label>Nome do cliente: <input type="text" name="nm_cliente"></label>

                    <label>
                        Telefone: 
                        <input type="number" name="ddd" placeholder="DDD" maxlength="2">
                        <input type="text" name="telefone" placeholder="00000-0000">
                    </label>

                    <button><i class="fa-solid fa-square-plus fa-2x"></i></button>
                </div>
                <?php include __DIR__.'./../pesquisa/pesquisar_clientes.php'; ?>

                <div class="carro_container">
                    <div class="container_1">
                        <label>Placa: <input type="text" name="placa" placeholder="AAA-0000"></label>
                        <label>Modelo: <input type="text" name="modelo" placeholder="vrumvrum"></label>
                        <label>Marca: <input type="text" name="marca" placeholder="veloz"></label>
                    </div>

                    <div class="container_2">
                        <label>Ano: <input type="text" name="placa" placeholder="1910"></label>
                        <label>Cor: <input type="text" name="modelo" placeholder="ferrugem"></label>
                        <label>
                            Motor: 
                            <input type="text" name="marca" placeholder="1.0">
                            <input type="text" name="marca" placeholder="8v">
                        </label>
                    </div>

                    <?php include __DIR__.'./../pesquisa/pesquisar_carros.php'; ?>
                </div>

                <div class="os_container">
                    <div class="container_1">
                        <label>
                            Status: 
                            <select name="status_os">
                                <option value="finalizado">Finalizado</option>
                                <option value="cancelado">Cancelado</option>
                                <option value="pendente">Pendente</option>
                            </select>
                        </label>

                        <label>
                            Data: 
                            <input type="date" name="data" value="<?=$dt?>">
                            <input type="time" name="horario" value="<?=$hr?>">
                        </label>
                    </div>

                    <div class="container_2">
                        <textarea name="descricao" cols="30" rows="7"></textarea>
                    </div>
                </div>

                <div class="enviar_container">
                    <a class="voltar" href="mostrar.php">Voltar</a>
                    <input type="submit" value="Salvar">
                </div>
            </section>
        </form>
    </section>
</main>