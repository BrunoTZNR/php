<?php
    /* JSON */

    //`json_encode(variavel)` -> Converte array/obj em texto, uma string JSON;

    //`json_decode(variavel, json_options | json_options)` -> Converte um texto JSON em um obj/array;

    $texto ='
    {
        "cep": "73080-800",
        "logradouro": "QMS 38",
        "complemento": "",
        "bairro": "Setor de Mansões de Sobradinho",
        "localidade": "Brasília",
        "uf": "DF",
        "ibge": "5300108",
        "gia": "",
        "ddd": "61",
        "siafi": "9701"
    }
    ';

    // echo "<pre>$texto</pre>";

    $dadosObj = json_decode($texto); //Converte para objeto;
    var_dump($dadosObj);
    echo $dadosObj->bairro;

    $dadosMatriz = json_decode($texto, true); //Converte para uma matriz;
    var_dump($dadosMatriz);
    echo $dadosMatriz['bairro'];

    $dadosMatriz['tipo']='casa';

    //JSON_PRETTY_PRINT -> Formata os dados retornados com espaços em branco.
    //JSON_UNESCAPED_UNICODE -> Codifica caracteres Unicode multibyte literalmente, ou seja imprime acentos.
    //jSON_NUMERIC_CHECK -> Transforma uma string numerica em inteiro.
    $json = json_encode($dadosMatriz, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
    echo "<pre>$json</pre>"

?>