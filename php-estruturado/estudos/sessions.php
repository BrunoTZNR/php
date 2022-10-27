<?php
    session_start();

    $_SESSION['nome']= "Bruno";
    $_SESSION['sobrenome']="Silva";

    
    /* sessions */
    
    //``session_start()` -> Inicia uma seção, sempre que trabalhar com sessões colocar este comando logo apos a arbetura.
    //`$_SESSION["nome"] = "valor"` -> Cria/modifica uma variavel de sessão.
    /*$_SESSION['nome']= "Bruno";
    $_SESSION['sobrenome']="Silva";*/

    //`session_unset() || $_SESSION = array()` -> Remove todas as variaveis da sessão.

    //`session_destroy()` -> Destroi a sessão.
?>