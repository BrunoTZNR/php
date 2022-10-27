<?php
    $resultado = '';
    
    $query = $conn->prepare("SELECT s.id, cli.nm_cliente, c.placa, s.dt_os, s.valor_total, s.status_os FROM tb_os s JOIN tb_carro c ON s.fk_carro=c.id JOIN tb_cliente cli ON s.fk_cliente=cli.id");
    $query->execute();

    if($query->rowCount() > 0){
        while($dados = $query->fetch(PDO::FETCH_ASSOC)){
            $resultado .= "<tr>
                <td>{$dados['id']}</td>
                <td><a href='./detalhes/detalhe.php?id=".$dados['id']."'>{$dados['nm_cliente']}</a></td>
                <td>{$dados['placa']}</td>
                <td>{$dados['dt_os']}</td>
                <td>R$ ".str_replace('.',',',$dados['valor_total'])."</td>
                <td style='text-transform: uppercase;'>{$dados['status_os']}</td>
            </tr>";
        }
    }else{
        $resultado = "<tr><td colspan='6'>no tienes cadastrados!</td></tr>";
    }
?>

<main>
    <section class="main_container">
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>CLIENTE</td>
                    <td>PLACA DO CARRO</td>
                    <td>DATA E HORA</td>
                    <td>VALOR TOTAL</td>
                    <td>SITUAÇÃO</td>
                </tr>
            </thead>

            <tbody>
                <?=$resultado?>
            </tbody>
        </table>
    </section>
</main>