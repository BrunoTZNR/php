<?php
    
    //`$variableName = [...values...]` -> Declara o array.
    $carros = ["Fusca","Uno","Gol"];

    //`array_push($arrayName, "value")` -> Adiciona um valor na ultima posição do array.
    $numeros = [1,2,3];

    //`array_push($variablename, value)` -> Puxa o dado incerido na ultima posição do array.
    array_push($numeros, 4);
    var_dump($numeros); //1, 2, 3, 4;

    //`$variableName[] = value;` -> Puxa o dado incerido na ultima posição do array.
    $numeros[] = 5;
    var_dump($numeros); //1, 2, 3, 4, 5;

    //`$variableName[indiceTroca] = value;` troca um valor dentro do array.
    $carros[1] = "Ferrari"; //["Fusca","Ferrari","Gol"];

    //`count($variableName)` -> Mostra a quantidade de indices dentro do array.
    $qtd = count($carros);
    echo $qtd; //3;

    //`$arrayName = ["indice" => "value"];` -> Declarando um array associativo, usa uma string ao invés do indice numérico para mostrar a posição dentro do array.
    $idade = ["Bruno"=>"19","Bianca"=>"18","Italo"=>"20","Renan"=>"27"];

    echo $idade["Bruno"].' '.$idade["Bianca"].' '.$idade["Italo"].' '.$idade["Renan"]; //19, 18, 20, 27;

    foreach($idade as $indice => $valor){
        echo "<br>O nome é $indice e a idade é $valor"; 
    }

    //`$variableName[indice] = value` -> Adicionando novos valores em um array associativo.
    $idade["Ésoj"] = "25";
    var_dump($idade); //"Bruno"=>"19","Bianca"=>"18","Italo"=>"20","Renan"=>"27","Ésoj"=>"25";

    //`sort($variableName)` -> Organiza em ordem alfabética/numeral em formato ascendente o array modificando os indices.
    sort($carros);

    //`rsort($variableName)` -> Organiza em ordem alfabética/numeral em formato descendente o array modificando os indices.
    rsort($carros);

    //`asort($variableName)` -> Organiza em ordem alfabética/numeral em formato ascendente o array pelo valor mantendo os indices.
    asort($idade);

    //`arsort($variableName)` -> Organiza em ordem alfabética/numeral em formato descendente o array pelo valor mantendo os indices.
    arsort($idade);

    //`ksort($variableName)` -> Organiza em ordem alfabética/numeral em formato ascendente o array pelo indice;
    ksort($idade);

    //`krsort($variableName)` -> Organiza em ordem alfabética/numeral em formato descendente o array pelo indice;
    krsort($idade);

    //`shuffle($variableName)` -> Bagunça o array.
    shuffle($carros);

    //`$variableName = [[x1,x2],[y1,y2]];` -> Declarando um array multidimencional.
    $exemplo = [[1,2,3],[4,5,6],[7,8,9]];
    var_dump($exemplo);
    echo $exemplo[1][0]; //4

    $exemplo2 = [
        "pessoas"=> [
        ["id"=>1,"nome"=>"Bruno","idade"=>19],
        ["id"=>2,"nome"=>"Bianca","idade"=>18],
        ["id"=>3,"nome"=>"Italo","idade"=>20],
        ["id"=>4,"nome"=>"Renan","idade"=>27]]
    ];
    var_dump($exemplo2);
    echo "<pre>";
    print_r($exemplo2["pessoas"][0]["nome"]); //Bruno
    echo "</pre>";

    //`array_keys($variableName)` -> Mostra as chaves do array selecionado.
    print_r(array_keys($idade));

    //`array_values($variableName)` -> Mostra os valores do array selecionado.
    print_r(array_values($idade));

    //`in_array("value",$variableName)` -> Mostra se tem ou não no array retornando 1(true) ou 0(false).
    var_dump(in_array("Uno",$carros)); //false;
    var_dump(in_array("Ferrari",$carros)); //true;

    //`array_search("value",$variableName)` -> Procura o valor e retorna a indice, caso não ache retorna false.
    var_dump(array_search("Uno",$carros)); //false;
    var_dump(array_search("Ferrari",$carros)); //2;

    //`isset($variableName[indice])` -> Checa se o indice existe, 1(true) ou 0(false), também serve para checar se uma variavel está setada, porem nao identifica nulos.
    var_dump(isset($nome)); //false;
    var_dump(isset($exemplo2["pessoas"][2])); //true;
    var_dump(isset($idade["Italo"])); //true;
    var_dump(isset($idade["José"])); //false;

    //`array_key_exists("value",$variableName)` -> Checa se o indice existe, 1(true) ou 0(false), também identifica valores nulos.
    var_dump(array_key_exists("Italo",$idade)); //true;
    var_dump(array_key_exists("José",$idade)); //false;

    //`array_key_first($variableName)` -> Mostra o 1º indice do array, versão php7>.
    echo array_key_first($idade); //Ésoj;

    //`reset(array_keys($variableName))` -> Mostra o 1º indice do array, versão php7<.
    // echo reset(array_keys($idade)); //Ésoj;

    //`array_key_last($variableName)` -> Mostra o 1º indice do array, versão php7>.
    echo array_key_last($idade); //Bianca;

    //`end(array_keys($variableName))` -> Mostra o 1º indice do array, versão php7<.
    // echo end(array_keys($idade)); //Bianca;

    //`array_flip($variableName)` -> Inverte indices para valores e valores para indices.
    print_r(array_flip($carros));

    //`implode("separador",$variableName)` -> Converte o array em uma string.
    echo implode(", ",$carros); //Gol, Fusca, Ferrari;

    //`explode("separador",string)` -> Converte o array em uma string.
    print_r(explode(", ","Olá, Bruno, Como, Está, ?")); //Array ( [0]Olá, [1]Bruno, [2]Como, [3]Está, [4]? );
    
    $array = [10,11,11,12,15,15];

    //`array_unique($arrayName)` -> Seleciona os valores unicos dentro do array;
    $array = [10,11,11,12,15,15];
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo "<pre>";
    print_r(array_unique($array));
    echo "</pre>";

    //`array_filter()` -> Limpa todos os indices que os valores se apareçam com 'false' ou '0';
    $array2 = ['nome'=>'Bruno','canal'=>'TZNR','instagram'=>null];
    echo "<pre>";
    print_r($array2);
    echo "</pre>";

    echo "<pre>";
    print_r(array_filter($array2));
    echo "</pre>";

    //`array_diff($arrayName,$arrayName)` -> Verifica as diferenças dos arrays e mostra as indices correspondentes a cada valor.
    $arrayA = [10,15,25];
    $arrayB = [10,17,22,26];

    echo "<pre>";
    print_r(array_diff($arrayA,$arrayB));
    echo "</pre>";

    echo "<pre>";
    print_r(array_diff($arrayB,$arrayA));
    echo "</pre>";

    //`array_intersect($arrayName,$arrayName)` -> Verifica as igualdades dos arrays.
    echo "<pre>";
    print_r(array_intersect($arrayA,$arrayB)); //[0]=>10;
    echo "</pre>";

    //`array_column($arrayName,indiceName)` -> Mostra os valores do indice indicado.
    $exemplo2 = [
        "pessoas"=> [
        ["id"=>1,"nome"=>"Bruno","idade"=>19],
        ["id"=>2,"nome"=>"Bianca","idade"=>18],
        ["id"=>3,"nome"=>"Italo","idade"=>20],
        ["id"=>4,"nome"=>"Renan","idade"=>27]]
    ];

    echo "<pre>";
    print_r(array_column($exemplo2["pessoas"],"nome"));
    echo "</pre>";

    //`array_combine($arrayIndice,$arrayValores)` -> Combina dois arrays(os dois devem possuir o mesmo tamanho).
    $arrayI = [1,10,22];
    $arrayV = ['a','c','d'];

    echo "<pre>";
    print_r(array_combine($arrayV,$arrayI));
    echo "</pre>";

    //`array_merge($arrayName1,$arrayName2...)` -> Mescla dois arrays.
    $arrayN = ['Bruno','Bianca','Italo'];
    $arrayM = ['Renan','Ésoj','Douglas'];

    echo "<pre>";
    print_r(array_merge($arrayN,$arrayM));
    echo "</pre>";

    //`array_pad($arrayName,totalPosições,valor)` -> Adiciona uma quantidade escolhida de posições no array, caso o mesmo não possua.
    $arrayP = ['A','B'];

    echo "<pre>";
    print_r(array_pad($arrayP,10,'sem posição'));
    echo "</pre>";

    //`array_shift($arrayName)` -> Consome os valores do array partindo do primeiro valor, tirando-o dos mesmo.
    $arrayS = ['A',1,'B','2'];

    echo "<pre>";
    print_r($arrayS); //[0]=>A,[1]=>1,[2]=>B,[3]=>2;
    echo "</pre>";

    echo "<pre>";
    echo array_shift($arrayS); //A
    echo "</pre>";

    echo "<pre>";
    print_r($arrayS); //[0]=>1,[1]=>B,[2]=>2;
    echo "</pre>";

    //`array_unshift(value1,value2...)` -> Adiciona um valor no array antes do primeiro valor.
    $arrayW = ['B','C'];

    echo "<pre>";
    print_r($arrayW); //[0]=>B,[1]=>C;
    echo "</pre>";

    array_unshift($arrayW,'A');

    echo "<pre>";
    print_r($arrayW); //[0]=>A,[1]=>B,[2]=>C;
    echo "</pre>";

    //`array_pop($arrayName)` -> Consome os valores do array partindo do ultimo valor, tirando-o dos mesmo.
    echo "<pre>";
    print_r($arrayW); //[0]=>A,[1]=>B,[2]=>C;
    echo "</pre>";

    echo "<pre>";
    echo array_pop($arrayW); //C
    echo "</pre>";

    echo "<pre>";
    print_r($arrayW); //[0]=>A,[1]=>B;
    echo "</pre>";

    //`unset($arrayName[indice])` -> Apaga o valor do array pelo indice correspondente.
    echo "<pre>";
    print_r($arrayW); //[0]=>A,[1]=>B;
    echo "</pre>";

    unset($arrayW[1]);

    echo "<pre>";
    print_r($arrayW); //[0]=>A;
    echo "</pre>";
?>