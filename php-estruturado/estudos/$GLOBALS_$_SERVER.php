<?php
    //superglobais

    //`$GLOBAL [$variableName]` -> Declara uma variável global podendo usar dentro e fora de funções.
    $a=10;
    $b=20;
    function soma1(){
        $GLOBALS['c1']=$GLOBALS['a']+$GLOBALS['b'];
    }
    function soma2(){
        global $a, $b, $c2;
        $c2=$a+$b;
    }
    soma1();
    soma2();
    echo '<p>'.$c1.' '.$c2.'</p>';

    //`$_SERVER['value']` -> Contém informações sobre headers, paths e scripts locations.

    echo $_SERVER['PHP_SELF']."<br>"; //o caminho do projeto;
    echo $_SERVER['SERVER_NAME']."<br>"; //localhost;
    echo $_SERVER['HTTP_HOST']."<br>"; //localhost;
    echo $_SERVER['REMOTE_ADDR']."<br>"; //::1;
    echo $_SERVER['HTTP_USER_AGENT']."<br>"; //informações queme stá acessando o site;
    echo $_SERVER['SCRIPT_NAME']."<br>"; //nome do projeto.

    //`$_FILES['indices']` -> Variáveis de Upload de Arquivos HTTP.

    echo $_FILES['name']."<br>";      //nome do arquivo;
    echo $_FILES['type']."<br>";      //tipo do arquivo;
    echo $_FILES['tmp_name']."<br>";  //nome temporario do arquivo;
    echo $_FILES['error']."<br>";     //erro: true(1) or false(0);
    echo $_FILES['size']."<br>";      //tamanha do arquivo em bytes;

    //`$_COOKIE['nomeChave']` - > Pega o valor do Cookie.

    echo $_COOKIE['exemplo'];
?>