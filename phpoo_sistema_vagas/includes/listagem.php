<?php
    $resultados = '';
    $mensagem = '';

    if(isset($_GET['status'])){
        switch($_GET['status']){
            case 'success':
                $mensagem ='<div class="alert alert-success mt-3">Ação executada com sucesso!</div>';
            break;

            case 'error':
                $mensagem ='<div class="alert alert-danger">Ação não executada!</div>';
            break;
        }
    }

    foreach($vagas as $vaga){
        $resultados .= '<tr>
                            <td>'.$vaga->id.'</td>
                            <td>'.$vaga->titulo.'</td>
                            <td>'.$vaga->descricao.'</td>
                            <td>'.($vaga->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                            <td>'.date('d/m/Y à\s H:i:s', strtotime($vaga->dt)).'</td>
                            <td>
                                <a href="editar.php?id='.$vaga->id.'" style="text-decoration: none;">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                </a>

                                <a href="excluir.php?id='.$vaga->id.'" style="text-decoration: none;">
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </a>
                            </td>';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                            <td colspan="6" class="text-center">Nenhuma vaga encontrada</td>
                                                        </tr>';
?>

<main>

    <?=$mensagem?>

    <section class="my-2">
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova Vaga</button>
        </a>
    </section>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>
</main>