<?php
    require __DIR__.'./vendor/autoload.php';

    use \App\Entity\Cliente;
    use \App\Entity\Pf;
    use \App\Entity\Pj;

    if(isset($_POST['cadastrar'])){
        $obCliente = new Cliente($_POST['nm_cliente'],$_POST['telefone'],$_POST['endereco']);

        $obCliente->cadastrar();

        header('location: index.php?status=success');
        exit;

        echo "<pre>"; print_r($obCliente); echo "</pre>";
    }



    include __DIR__.'./includes/header.php';
    include __DIR__.'./includes/formulario.php';
    include __DIR__.'./includes/footer.php';