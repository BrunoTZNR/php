<?php
    $resultado = '';

    if(isset($_POST['search']) && isset($_POST['search_nm_cliente']) && !empty($_POST['search_nm_cliente'])){
        $nm_cliente = clean($_POST['search_nm_cliente']);

        $query = $conn->prepare('SELECT id, nm_cliente, ddd, telefone FROM tb_cliente WHERE nm_cliente LIKE CONCAT("%",?,"%")');
        $query->execute(Array($nm_cliente));

        if($query->rowCount() > 0){
            $resultado = '<tr>
                            <th>ID</th>
                            <th>NOME</th>
                        </tr>';
            while($dado = $query->fetch(PDO::FETCH_ASSOC)){
                $resultado .= "<tr>
                    <td>{$dado['id']}</td>
                    <td>{$dado['nm_cliente']}</td>
                </tr>";
            }
        }else{
            $resultado = "no tienes no uno puto cadastrado!";
        }
    }
?>
<div class="procurar_cliente">
    <form>
        <input type="text" name="search_nm_cliente" placeholder="Nome do cliente">

        <input type="submit" value="Procurar" name="search">
    </form>

    <div>
        <table>
            <?=$resultado?>
        </table>
        
    </div>
</div>