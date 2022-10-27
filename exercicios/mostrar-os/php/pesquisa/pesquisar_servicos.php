<?php
    $resultado = '';

    if(isset($_POST['search']) && isset($_POST['search_nm_cliente']) && !empty($_POST['search_nm_cliente'])){
        $nm_cliente = clean($_POST['search_nm_cliente']);

        $query = $conn->prepare('SELECT id, nm_cliente FROM tb_cliente WHERE nm_cliente LIKE CONCAT("%",?,"%")');
        $query->execute(Array($nm_cliente));

        if($query->rowCount() > 0){
            while($dado = $query->fetch(PDO::FETCH_ASSOC)){
                $resultado .= "";
            }
        }else{
            $resultado = "no tienes no uno puto cadastrado!";
        }
    }
?>
<div class="procurar_cliente" hidden>
    <form>
        <input type="text" name="search_nm_cliente" placeholder="Nome do cliente">

        <input type="submit" value="Procurar" name="search">
    </form>

    <div>
        <?=$resultado?>
    </div>
</div>