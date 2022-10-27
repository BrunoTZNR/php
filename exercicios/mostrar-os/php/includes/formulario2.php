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
                        <input type="text" name="ddd" placeholder="DDD">
                        <input type="text" name="telefone" placeholder="00000-0000">
                    </label>

                    <?php include __DIR__.'./../pesquisa/pesquisar_clientes.php'; ?>
                </div>

                <div class="carro_container">
                    <div>
                        <label>Placa: <input type="text" name="placa" placeholder="AAA-0000"></label>
                        <label>Modelo: <input type="text" name="modelo" placeholder="vrumvrum"></label>
                        <label>Marca: <input type="text" name="marca" placeholder="veloz"></label>
                    </div>

                    <div>
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
                    <div>
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

                    <div>
                        <textarea name="descricao" cols="30" rows="7"></textarea>
                    </div>
                </div>

                <div class="valores_container">
                    <div class="valor_mo">
                        
                    </div>

                    <div class="valor_produtos">

                    </div>

                    <div class="valor_total">

                    </div>
                </div>

                <div class="servicos">
                    <!-- mostrar serviços cadastrados na os -->
                    <?php include __DIR__.'./../pesquisa/pesquisar_servicos.php'; ?>
                </div>

                <div class="produtos">
                    <!-- mostrar produtos cadastrados na os -->
                    <?php include __DIR__.'./../pesquisa/pesquisar_produtos.php'; ?>
                </div>
            </section>
        </form>
    </section>
</main>