<?php
    //montando tabela do select
    if(count($dados)>0){
        echo "<br><table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
        </tr>";

        foreach($dados as $chave => $valor){
            echo "<tr>
                    <th>".$valor['id_cliente']."</th>
                    <th>".$valor['nome']."</th>
                    <th>".$valor['email']."</th>
                    <th><a href='#' class='btn-atualizar' data-id='".$valor['id_cliente']."' data-nome='".$valor['nome']."' data-email='".$valor['email']."'>Atualizar</a> | <a href='#' class='btn-deletar' data-id='".$valor['id_cliente']."' data-nome='".$valor['nome']."' data-email='".$valor['email']."'>Deletar</a></th>
                </tr>";
        }

        echo "</table>";
    }else{
        echo "<p>Nenhum cliente cadastrado!</p>";
    }
?>