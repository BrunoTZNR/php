<?php
    /* cURL GET - mesma coisa que o ajax em js, porém mais poderoso */

    //`curl_init()` -> Inicialize a sessão cURL.
    $ch = curl_init(); //uso padrão para inicializar o cURL;

    //`curl_setopt($ch, opções, 'url')` -> Define uma opção para uma transferência cURL.
    //apontar a url desejada;
    curl_setopt($ch, CURLOPT_URL, "https://viacep.com.br/ws/73080800/json/");
    //ativar retorno como string do servidor;
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //`curl_exec($ch)` -> Executa uma sessão cURL.
    //executa o cURL;
    $retorno = curl_exec($ch);

    //`curl_errno($ch)` -> Retorna o número do último erro.
    //`curl_error($ch)` -> Retorna uma string contendo o ultimo erro.
    //verifica se tem algum erro, caso tenha mostrar;
    if (curl_errno($ch)) { 
        print curl_error($ch); 
    }

    //`curl_close($ch)` -> Fecha uma sessão cURL;
    //fechar o cURL;
    curl_close ($ch);

    //mostrar retorno vindo;
    echo $retorno."<br>";
    $dados = json_decode($retorno, true);
    print_r(array_keys($dados)); //mostra as chaves do json(array);
    echo "<br>".$dados['ddd'];
?>