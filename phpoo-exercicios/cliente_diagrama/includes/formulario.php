<?php
    define('TITLE','Cadastro de clientes');
    define('NAV','cadastros');

?>

<main>
    <header>
        <section class="container_header">
            <h1>Cliente Diagrama</h1>

            <nav>
                <ul>
                    <li><a href="index.php"><?=NAV?></a></li>
                </ul>
            </nav>
        </section>
    </header>

    <section class="container">
        <h3 class="title"><?=TITLE?></h3>

        <form class="cadastrar" method="post">
            <section class="container_l form_group">
                <div class="padrao">
                    <label class="label_form">Nome:
                        <input class="input_form" type="text" name="nm_cliente" id="nm_cliente" placeholder="Ex: Zé Piqueno Dadinho" required>
                    </label>

                    <label class="label_form">Telefone:
                        <input class="input_form" type="text" name="telefone" id="telefone" placeholder="(99) 99999-9999" required>
                    </label>

                    <label class="label_form">Endereço:
                        <input class="input_form" type="text" name="endereco" id="endereco" placeholder="Ex: Não tinha teto nem nada" required>
                    </label>
                </div>
            </section>

            <section class="container_r form_group">
                <div class="tipo_container">
                    <div class="radio">
                        <label class="label_cpf">
                            <input class="input_tipo cpf" type="radio" name="tipo" value="cpf" checked>
                            <span>CPF</span>
                        </label>
                    </div>
                    
                    <div class="radio">
                        <label class="label_cnpj">
                            <input class="input_tipo cnpj" type="radio" name="tipo" value="cnpj">
                            <span>CNPJ</span>
                        </label>
                    </div>
                </div>
                
                <div class="pj" style="display: none;">
                    <label class="label_form">CNPJ:
                        <input class="input_form" type="text" name="cnpj" id="cnpj" placeholder="00.000.000-0000/00">
                    </label>

                    <label class="label_form">Nome Empresa:
                        <input class="input_form" type="text" name="nm_empresa" id="nm_empresa" placeholder="Nome empresa:">
                    </label>
                </div>

                <div class="pf">
                    <label class="label_form">CPF:
                        <input class="input_form" type="text" name="cpf" id="cpf" placeholder="000.000.000-00">
                    </label>
                </div>

                <input class="cadastrar_submit" type="submit" value="Cadastrar" name="cadastrar">
            </section>
        </form>
</main>