<?php
    /* cURL POST - mesma coisa que o ajax em js, porém mais poderoso */

    //`curl_init()` -> Inicialize a sessão cURL.
    $ch = curl_init(); //uso padrão para inicializar o cURL;

    //`curl_setopt($ch, opções, 'url')` -> Define uma opção para uma transferência cURL.
    //apontar a url desejada;
    curl_setopt($ch, CURLOPT_URL, "http://localhost/aula-php/curl-post-teste.php");

    //diz que é post (padrão é get);
    curl_setopt($ch, CURLOPT_POST, 1);

    //`http_build_query()` -> era a string de consulta (query) em formato URL.
    //especifica os campos que queremos mandar via post;
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['valor1'=>"Bruno", 'valor2'=>"Sem namorada"]));

    //ativar retorno como string do servidor;
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //`curl_exec($ch)` -> Executa uma sessão cURL.
    //executa o cURL;
    $resultado = curl_exec($ch);
    
    //verifica se tem algum erro, caso tenha mostrar;
    if (curl_errno($ch)) { 
        print curl_error($ch); 
    }

    //`curl_close($ch)` -> Fecha uma sessão cURL;
    //fechar o cURL;
    curl_close($ch);

    //mostrar retorno vindo;
    echo $resultado."<br>";
?>