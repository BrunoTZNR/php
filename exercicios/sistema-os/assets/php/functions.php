<?php
    //limpa os dados enviados do formulario
    function limparPost($dados): string{
        $dados=trim($dados);
        $dados=stripslashes($dados);
        return htmlspecialchars($dados);
    }

?>