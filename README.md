# studing-php


### variáveis

as variáveis em PHP são declaradas a partir do '$', ex:
```php
$exemplo;
```
#### tipos de dados

```php
  //string
  $exemplo1 = "Bruno"; //palavras/caracteres/cadeia de caracteres;
  
  //int
  $exemplo2 = 10; //números inteiros;
  
  //float
  $exemplo3 = 2.4; //números decimais;
  
  //boolean
  $exemplo4 = true; //true of false - boolean types;
  
  //null
  $exemplo5 = null; //nulo
  
  //array
  $exemplo6 = array("Fusca", 24, 10.2, "Bruno"); //array
  
  //objeto
  class pessoa{
     public $nome;      //declarando variáveis do objeto;
     public $sobrenome; //declarando variáveis do objeto;
     public function __construct($nome,$sobrenome){   //construção do objeto;
        $this->nome=$nome;
        $this->sobrenome=$sobrenome;
     }
     public function mensagem(){    //função que enviará a mensagem
        return "O usuário é $this->nome $this->sobrenome!";
        }
     }

  $pessoa1=new pessoa("Bruno","Silva"); //irá criar um novo objeto na variavel '$pessoa1';

  echo $pessoa1->mensagem(); //O usuário é Bruno Silva;
```

### comandos

`echo` -> O comando echo é um retorno de saída.
```php
  $exemplo = "exemplo";
  $exemplo2 = "de echo!";
  
  echo $exemplo; //mostrará a palavra 'exemplo';
  echo "A palavra soletrada e-x-e-m-p-l-o escreita é $exemplo"; //'A palavra soletrada e-x-e-m-p-l-o escreita é exemplo';
  echo 'Aqui está um '.$exemplo.' '.$exemplo2.' concatenado usando aspas simples!'; //'Aqui está um exemplo de echo! concatenado usando aspas simples!';
```

`print_r($variavel)` -> Mostra a informação sobre uma variável de forma legível.
```php
  $exemplo = [1,2,3];
  
  echo "<pre>";
  print_r($gwerg); //Bruno
  echo "</pre>"; /*
  Array
    (
        [0] => 1
        [1] => 2
        [2] => 3
    )
    */
```

`var_dump(variableName)` -> Imprime qual o tipo da variável.
```php
  $exemplo1 = "Oi";
  var_dump($exemplo1); //srintg(2)='Oi';
  
  $exemplo2 = array("Fusca", 24, 10.2, "Bruno");
  var_dump($exemplo2); //array (size=4) 0=> string 'Fusca' (length=5), 1=> int 24, 2=> float 10.2, 3=> string 'Bruno' (length=5;)
```

`empty($variableName)` -> Determina se uma variável é considerada vazia, é considerada vazia se não existir ou seu valor é igual false.
```php
  $nome="";
  $idade=18;

  var_dump(empty($nome));         //true
  var_dump(empty($sobrenome));    //true
  var_dump(empty($idade));        //false
```

`header()` -> É usado para enviar um cabeçalho HTTP bruto.
```php
  header('Location: https://google.com'); //Você é redirecionado a página inserida no header;
```

`strlen(string)` -> Conta quantos caracteres a string possui.
```php
  $palavra = "Bruno";
  
  echo strlen($palavra);       //5 através da variável declarada;
  echo strlen("Oi tudo bom?"); //12 através da string digitada como parâmetro;
```

`str_word_count(string)` -> Conta quantas palavras a string possui.
```php
  $frase = "Bruno está estudando php";
  
  echo str_word_count($frase);       //4 através da variável declarada;
  echo str_word_count("Olá mundo!);  //2 através da string digitada como parâmetro;
```

`strrev(string)` -> Inverte a string.
```php
  $palavra = "Bruno";
  
  echo strrev($palavra); //onurB;
```

`strpos(string, wordFinded)` -> Mostra o index da palavra na string.
```php
  $frase = "PHP é uma linguagem de programação";

  echo strpos($frase, "é");                                //4;
  echo strpos("PHP é uma linguagem de programação", "de"); //21;
```

`str_replace("old","sew",string)` -> Substitui um caractere na string.
```php
  $palavra = "Olá Mundo";

  echo str_replace("Mundo","Bruno",$palavra); //Olá Bruno;
  echo str_replace("-","/","01-01-2003");     //01/01/2003
```

`stripslashes($variableName)` -> Tira as barras invertidas;
```php
  $nome="Seu nome é\ Bruno";
  echo $nome; //Seu nome é\ Bruno;
  echo stripslashes($nome); //Seu nome é Bruno;
```

`preg_match("/EXPRESSION/" ,$variableName)` -> Verifica se há algum item na variável qeu haja na expreção.
```php
  $nome="Bruno";
  $nome2=" Bruno123@";

  if(preg_match("/^[a-zA-Z-' ]*$/", $nome)){ //está expressão diz qeu aceita letras minúsculas e maísculas de A até Z, apóstrofe ' e espaços.
    echo "O nome é válido!";
  }else{
    echo "O nome é inválido!";
  }
  //O nome é válido!

  if(preg_match("/^[a-zA-Z-' ]*$/", $nome2)){
    echo "O nome é válido!";
  }else{
    echo "O nome é inválido!";
  }
  //O nome é inválido!;
```

`$variableName = (typeNum)$variable;` -> Conversão int - float.
```php
  $valor = 10.00;                               //float
  $valorConvertido = (int)$valor;               //int
  $valorConvertido2 = (float)$valorConvertido;  //float
```

`is_int(variableName);` -> True or False na condição da variável ser do tipo int.
```php
  $valor1 = 100;
  $valor2 = 5.75;
  $valor3 = "teste";

  var_dump(is_int($valor1)); //boolean(true)
  var_dump(is_int($valor2)); //boolean(false)
  var_dump(is_int($valor3)); //boolean(false)
```

`is_float(variableName);` -> True or False na condição da variável ser do tipo float.
```php
  $valor1 = 100;
  $valor2 = 5.75;
  $valor3 = "teste";

  var_dump(is_float($valor1)); //boolean(false)
  var_dump(is_float($valor2)); //boolean(true)
  var_dump(is_float($valor3)); //boolean(false)
```

`is_numeric(variableName);` -> True or False na condição que haja algum número na variável sendo int/float/string.
```php
  $valor1 = 100;
  $valor2 = 5.75;
  $valor3 = "1teste"
  $valor4 = "123";

  var_dump(is_numeric($valor1)); //boolean(true
  var_dump(is_numeric($valor2)); //boolean(true)
  var_dump(is_numeric($valor3)); //boolean(false)
  var_dump(is_numeric($valor4)); //boolean(true)
```

`isset($variableName);` -> Verifica se existe a variável especificada.
```php
  $nome = 'Bruno';
  var_dump(isset($nome)); //true;
  var_dump(isset($idade)); //false;
```

`htmlspecialchars($variable)` -> Tira os caracteres especiais, ajuda com a segurança da página com php.
```php
  $velho ="<a>Olá Mundo!</a>";
  $novo =htmlspecialchars("<a>Olá Mundo!</a>");
  
  echo $velho; //Olá mun!do
  echo $novo;  //<a>Olá Mundo!</a>;
```

`trim($variableName)` -> Tira os espaços em branco no inicio e final do valor, e caracteres especiais ex: <br>, /n;
```php
  $nome=" Bruno ";
  echo $nome; // Bruno ;
  echo trim($nome); //Bruno;
```

`filter_var($variableName, FILTER)` -> Filtra a variável com um especificado filtro.
```php
  $email="bruno123@email.com";
  $email2="bruno 123@email";
  $url="https://www.exemplo.com";
  $url2="exemp lo.com.exemplos";
  
  var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));    //bruno123@email.com;
  var_dump(filter_var($email2, FILTER_VALIDATE_EMAIL));   //false;
  var_dump(filter_var($url, FILTER_VALIDATE_URL));        //https://www.exemplo.com;
  var_dump(filter_var($url2, FILTER_VALIDATE_URL));       //false;
```

`pi();` -> Mostra o valor de pi.
```php
  echo pi(); //3.1415926535898;
```

`min();` -> Acha o menor valor.
```php
  $numeros = [1,10,40,5000,-20,15];
  
  echo min($numeros); //-20;
```

`max();` -> Acha o maior valor.
```php
  $numeros = [1,10,40,5000,-20,15];
  
  echo max($numeros); //5000;
```

`abs();` -> Acha o valor absoluto.
```php
  $numero = -20;
  
  echo abs($numero); //20;
```

`sqrt();` -> Calcula a raiz quadrada.
```php
  $numero = 16;
  
  echo sqrt($numero); //4;
```

`round();` -> Arredonda números, >=.5 arredonda pra cima, <.5 arredonda pra baixo.
```php
  $numero1 = 10.65;
  $numero2 = 10.45;
    
  echo round($numero1); //11;
  echo round($numero2); //10;
```

`rand(initialValue, finalValue);` -> Gera um núemro aleatório.
```php
  echo rand();      //aleatório infinito;
  echo rand(1,10);  //um número entre 1 e 10;
```

#### constantes

`define("constanteName",value);` -> Cria uma constante.
```php
  define("exemplo",100);
  
  echo exemplo; //100;
```

#### Operadores
##### Aritméticos

`+(variable)` -> Identidade - conversão da variável para int ou float conforme o  apropriado.
```php
  $valor1 = "10";
  var_dump(+$valor1); //int 10;
  $valor2 = "10.5";
  var_dump(+$valor2); //float 10.5;
```

`-(variable)` -> Negação - oposto da variável.
```php
  $valor3 = "15";
  echo -$valor3; //-15;
  
  $valor4 = -15;
  echo -$valor4; //15;
```

`(+)` -> Adição.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 + $n2; //15;
```

`(+)` -> Subtração.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 - $n2; //5;
```

`(+)` -> Multiplicação.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 * $n2; //50;
```

`(+)` -> Divisão.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 / $n2; //2;
```

`(+)` -> Módulo.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 % $n2; //0;
```

`(+)` -> Exponencial.
```php
  $n1 = 10;
  $n2 = 5;
        
  echo $n1 ** $n2; //100000;
```

##### Atribuição

`(=)` -> Operador básico de atribuição.
```php
  $exemplo = "exemplo";
```

```php
  $n3 = 1;   //1;
  $n3 += 1;  //2;
  $n3 -= 1;  //1;
  $n3 *= 1;  //1;
  $n3 /= 1;  //1;
  $n3 **=1;  //1;
```

##### Incrementação/Decrementação
```php
  $n4 = 1;   //1;
  $n5 = 1;   //1;
```

`++vabriable` -> Pré-Incrementação.
```php
  echo ++$n4; //2;
```

`++vabriable` -> Pós-Incrementação.
```php
  echo $n4++; //2;
  echo $n4;   //3;
```

`++vabriable` -> Pré-Decrementação.
```php
  echo --$n5; //0;
```

`++vabriable` -> Pós-Decrementação.
```php
  echo $n5--; //0;
  echo $n5;   //-1;
```

##### Concatenação

`.` -> Concatenação de string.
```php
  $nome = "Bruno";
  $sobrenome = "Silva";
  $nomecompleto = $nome.' '.$sobrenome;
```

##### Comparação

`(==)` -> Igual.
```php
  var_dump(5 == 5);       //true;
  var_dump(5 == 10);      //false;
  var_dump(5 == "5");     //true;
```

`(===)` -> Idêntico.
```php
  var_dump(5 === 5);      //true;
  var_dump(5 === 10);     //false;
  var_dump(5 === "5");    //false;
```

`(!=)` -> Diferente.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
```

`(!==)` -> Não Idêntico.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
  var_dump(5 != "5");     //false;
```

`(<)` -> Menor que.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
```

`(>)` -> Maior que.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
```

`(<=)` -> Menor ou Igual.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
```

`(>=)` -> Maior ou Igual.
```php
  var_dump(5 != 5);       //false;
  var_dump(5 != 10);      //true;
```

##### Condicional

`(condição) ? /true/ : /false/;` -> Ternário.
```php
  $idade = 15;
        
  echo $idade >= 18 ? "Maior de idade" : "Menor de idade"; //Menor de idade;
```

##### Lógico

`(&&)` -> E.
```php
  var_dump(true && true);     //true;
  var_dump(true && false);    //false;
  var_dump(false && true);    //false;
  var_dump(false && false);   //false;
```

`(||)` -> OU.
```php
  var_dump(true || true);     //true;
  var_dump(true || false);    //true;
  var_dump(false || true);    //true;
  var_dump(false || false);   //false;
```

`(!)` -> Não.
```php
  var_dump(!true);   //false;
  var_dump(!false);  //true;
```

#### Estrutura de condição

##### If/Else

`if(condição)` -> Se.
```php
  $hora = 12;
  if(hora >= 12){
    echo "Boa Tarde";
  } //Boa Tarde;
```

`if(condição)/else` -> Se/Se Não.
```php
  $hora = 8;
  if(hora >= 12){
    echo "Boa Tarde";
  } else {
    echo "Bom Dia";
  } //Bom Dia;
```

`if(condição)/else if(condição)/else` -> Se/Se Não/Se não.
```php
  $hora = 19;
  if(hora < 12){
    echo "Bom Dia";
  } else if(hora >= 12 && hora < 18){
    echo "Boa Tarde";
  } else {
    echo "Boa Noite";
  } //Boa Noite;
```

##### Switch

`switch(variable)` -> Escolha.
```php
  $cor = "vermelho";
  
  switch($cor){
    case "vermelho":
      echo "A cor é vermelha";
    break;
    case "azul":
      echo "A cor é azul";
    break;
    case "rosa":
      echo "A cor é rosa";
    break;
    default:
      echo "A cor ".$cor." não é conhecida";
  } //A cor é vermelha;
```

#### Estrutura de repetição

##### While

`while(condição)` -> Enquanto.
```php
  $x = 1;
  
  while($x<=5){
    echo "$x";
  } // 1, 2, 3, 4, 5;
```

##### Do...while

`Do{...}while(condição)` -> Faça enquanto.
```php
  $y = 6;
  
  do{
    echo "$y";
    $y--;
  }while($y>=0) //6, 5, 4, 3, 2, 1, 0;
```

##### for

`for(variavel;condição;incremento/)` -> Para.
```php
  for($i=0;$i<=9;$i++){
    echo "$i";
  } //0, 1, 2, 3, 4, 5, 6, 7, 8, 9;
```

##### Foreach

`foreach(variavel as alias)` -> Pecorra.
```php
  $cores = ["azul","amarelo","verde","vermelho"];

  foreach($cores as $valor){
    echo "A cor é $valor <br>";
  } //A cor é azul, A cor é amarelo, A cor é verde, A cor é vermelho;
```

#### Funções
`function nameFuncation(parameters)` -> Função.
```php
  function EscreverMensagem($nome){
    echo "Olá tudo bom $nome?";
  }
  //call function;
  EscreverMensagem("Bruno"); //Olá tudo bom Bruno?;

  function soma(int $n1, int $n2){
    return $n1 + $n2;
  }
  //call the function with 'echo';
  echo soma(10,10); //20;

  function fazerCafe($tipo = "Capuccino"){
    return "Fazendo café de: $tipo!";
  }   
  //call the function with 'echo', and changed a default variable in teh parameter;
  echo fazerCafe("Chocolate"); //Fazendo café de: Chocolate!;
  //call teh function witch 'echo' and starts with a default variable declarated
  echo fazerCafe(); //Fazendo café de: Capuccino;
```

#### Arrays

`$variableName = [...values...]` -> Declaração de um array.
```php
  $n = [1,2,3,4,5,6,7,8,9];
```

`$variableName = [...values...]` -> Declara o array.
```php
  $carros = ["Fusca","Uno","Gol"];
```

`array_push($arrayName, "value")` -> Adiciona um valor na ultima posição do array.
```php
  $numeros = [1,2,3];
```

`array_push($variablename, value)` -> Puxa o dado incerido na ultima posição do array.
```php
  array_push($numeros, 4);
  var_dump($numeros); //1, 2, 3, 4;
```

`$variableName[] = value;` -> Puxa o dado incerido na ultima posição do array.
```php
  $numeros[] = 5;
  var_dump($numeros); //1, 2, 3, 4, 5;
```

`$variableName[indiceTroca] = value;` troca um valor dentro do array.
```php
  $carros[1] = "Ferrari"; //["Fusca","Ferrari","Gol"];
```

`count($variableName)` -> Mostra a quantidade de indices dentro do array.
```php
  $qtd = count($carros);
  echo $qtd; //3;
```

`$arrayName = ["indice" => "value"];` -> Declarando um array associativo, usa uma string ao invés do indice numérico para mostrar a posição dentro do array.
```php
  $idade = ["Bruno"=>"19","Bianca"=>"18","Italo"=>"20","Renan"=>"27"];

  echo $idade["Bruno"].' '.$idade["Bianca"].' '.$idade["Italo"].' '.$idade["Renan"]; //19, 18, 20, 27;

  foreach($idade as $indice => $valor){
      echo "<br>O nome é $indice e a idade é $valor"; 
  }
```

`$variableName[indice] = value` -> Adicionando novos valores em um array associativo.
```php
  $idade["Ésoj"] = "25";
  var_dump($idade); //"Bruno"=>"19","Bianca"=>"18","Italo"=>"20","Renan"=>"27","Ésoj"=>"25";
 ```

`sort($variableName)` -> Organiza em ordem alfabética/numeral em formato ascendente o array modificando os indices.
```php
  sort($carros);
```

`rsort($variableName)` -> Organiza em ordem alfabética/numeral em formato descendente o array modificando os indices.
```php
  rsort($carros);
```

`asort($variableName)` -> Organiza em ordem alfabética/numeral em formato ascendente o array pelo valor mantendo os indices.
```php
  asort($idade);
```

`arsort($variableName)` -> Organiza em ordem alfabética/numeral em formato descendente o array pelo valor mantendo os indices.
```php
  arsort($idade);
```

`ksort($variableName)` -> Organiza em ordem alfabética/numeral em formato ascendente o array pelo indice;
```php
  ksort($idade);
```

`krsort($variableName)` -> Organiza em ordem alfabética/numeral em formato descendente o array pelo indice;
```php
  krsort($idade);
```

`shuffle($variableName)` -> Bagunça o array.
```php
  shuffle($carros);
```

`$variableName = [[x1,x2],[y1,y2]];` -> Declarando um array multidimencional.
```php
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
```

`array_keys($variableName)` -> Mostra as chaves do array selecionado.
```php
  print_r(array_keys($idade));
```

`array_values($variableName)` -> Mostra os valores do array selecionado.
```php
  print_r(array_values($idade));
```

`in_array("value",$variableName)` -> Mostra se tem ou não no array retornando 1(true) ou 0(false).
```php
  var_dump(in_array("Uno",$carros)); //false;
  var_dump(in_array("Ferrari",$carros)); //true;
```

`array_search("value",$variableName)` -> Procura o valor e retorna a indice, caso não ache retorna false.
```php
  var_dump(array_search("Uno",$carros)); //false;
  var_dump(array_search("Ferrari",$carros)); //2;
```

`isset($variableName[indice])` -> Checa se o indice existe, 1(true) ou 0(false), também serve para checar se uma variavel está setada, porem nao identifica nulos.
```php
  var_dump(isset($nome)); //false;
  var_dump(isset($exemplo2["pessoas"][2])); //true;
  var_dump(isset($idade["Italo"])); //true;
  var_dump(isset($idade["José"])); //false;
```

`array_key_exists("value",$variableName)` -> Checa se o indice existe, 1(true) ou 0(false), também identifica valores nulos.
```php
  var_dump(array_key_exists("Italo",$idade)); //true;
  var_dump(array_key_exists("José",$idade)); //false;
```

`array_key_first($variableName)` -> Mostra o 1º indice do array, versão php7>.
```php
  echo array_key_first($idade); //Ésoj;
```

`reset(array_keys($variableName))` -> Mostra o 1º indice do array, versão php7<.
```php
  echo reset(array_keys($idade)); //Ésoj;
```

`array_key_last($variableName)` -> Mostra o 1º indice do array, versão php7>.
```php
  echo array_key_last($idade); //Bianca;
```

`end(array_keys($variableName))` -> Mostra o 1º indice do array, versão php7<.
```php
  echo end(array_keys($idade)); //Bianca;
```

`array_flip($variableName)` -> Inverte indices para valores e valores para indices.
```php
  print_r(array_flip($carros));
```

`implode("separador",$variableName)` -> Converte o array em uma string.
```php
  echo implode(", ",$carros); //Gol, Fusca, Ferrari;
```

`explode("separador",string)` -> Converte o array em uma string.
```php
  print_r(explode(", ","Olá, Bruno, Como, Está, ?")); //Array ( [0]Olá, [1]Bruno, [2]Como, [3]Está, [4]? );
```

`array_unique($arrayName)` -> Seleciona os valores unicos dentro do array;
```php
    $array = [10,11,11,12,15,15];
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo "<pre>";
    print_r(array_unique($array));
    echo "</pre>";
```

`array_filter()` -> Limpa todos os indices que os valores se apareçam com 'false' ou '0';
```php
    $array2 = ['nome'=>'Bruno','canal'=>'TZNR','instagram'=>null];
    echo "<pre>";
    print_r($array2);
    echo "</pre>";

    echo "<pre>";
    print_r(array_filter($array2));
    echo "</pre>";
```

`array_diff($arrayName,$arrayName)` -> Verifica as diferenças dos arrays e mostra as indices correspondentes a cada valor.
```php
    $arrayA = [10,15,25];
    $arrayB = [10,17,22,26];

    echo "<pre>";
    print_r(array_diff($arrayA,$arrayB)); //[1]15,[2]25;
    echo "</pre>";

    echo "<pre>";
    print_r(array_diff($arrayB,$arrayA)); //[1]17,[2]22,[3]26;
    echo "</pre>";
```

`array_intersect($arrayName,$arrayName)` -> Verifica as igualdades dos arrays.
```php
    echo "<pre>";
    print_r(array_intersect($arrayA,$arrayB)); //[0]=>10;
    echo "</pre>";
```

`array_column($arrayName,indiceName)` -> Mostra os valores do indice indicado.
```php
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
```

`array_combine($arrayIndice,$arrayValores)` -> Combina dois arrays(os dois devem possuir o mesmo tamanho).
```php
    $arrayI = [1,10,22];
    $arrayV = ['a','c','d'];

    echo "<pre>";
    print_r(array_combine($arrayV,$arrayI));
    echo "</pre>";
```

`array_merge($arrayName1,$arrayName2...)` -> Mescla dois arrays.
```php
    $arrayN = ['Bruno','Bianca','Italo'];
    $arrayM = ['Renan','Ésoj','Douglas'];

    echo "<pre>";
    print_r(array_merge($arrayN,$arrayM));
    echo "</pre>";
```

`array_pad($arrayName,totalPosições,valor)` -> Adiciona uma quantidade escolhida de posições no array, caso o mesmo não possua.
```php
    $arrayP = ['A','B'];

    echo "<pre>";
    print_r(array_pad($arrayP,10,'sem posição'));
    echo "</pre>";
```

`array_shift($arrayName)` -> Consome os valores do array partindo do primeiro valor, tirando-o dos mesmo.
```php
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
```

`array_unshift(value1,value2...)` -> Adiciona um valor no array antes do primeiro valor.
```php
    $arrayW = ['B','C'];

    echo "<pre>";
    print_r($arrayW); //[0]=>B,[1]=>C;
    echo "</pre>";

    array_unshift($arrayW,'A');

    echo "<pre>";
    print_r($arrayW); //[0]=>A,[1]=>B,[2]=>C;
    echo "</pre>";
```

`array_pop($arrayName)` -> Consome os valores do array partindo do ultimo valor, tirando-o dos mesmo.
```php
    echo "<pre>";
    print_r($arrayW); //[0]=>A,[1]=>B,[2]=>C;
    echo "</pre>";

    echo "<pre>";
    echo array_pop($arrayW); //C
    echo "</pre>";

    echo "<pre>";
    print_r($arrayW); //[0]=>A,[1]=>B;
    echo "</pre>";
```

`unset($arrayName[indice])` -> Apaga o valor do array pelo indice correspondente.
```php
    echo "<pre>";
    print_r($arrayW); //[0]=>A,[1]=>B;
    echo "</pre>";

    unset($arrayW[1]);

    echo "<pre>";
    print_r($arrayW); //[0]=>A;
    echo "</pre>";
```

#### Superglobals

##### $GLOBALS

`$GLOBAL ['$variableName']` -> Declara uma variável global podendo usar dentro e fora de funções.
```php
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
  echo '<p>'.$c1.' '.$c2.'</p>'; //30 30;
  ```

##### $_SERVER

`$_SERVER['value']` -> Contém informações sobre headers, paths e scripts locations.
```php
  echo $_SERVER['PHP_SELF']; //o caminho do projeto;
  echo $_SERVER['SERVER_NAME']; //localhost;
  echo $_SERVER['HTTP_HOST']; //localhost;
  echo $_SERVER['REMOTE_ADDR']; //::1;
  echo $_SERVER['HTTP_USER_AGENT']; //informações queme stá acessando o site;
  echo $_SERVER['SCRIPT_NAME']; //nome do projeto.
```

##### $_GET

`$_GET['value']` -> Pega informações do cabeçalho http da página ou seja da url.
```php
  //...?nome=Bruno
  $nome = $_GET['nome'];
  echo $nome; //Bruno
  
  //...?sobrenome=Silva&idade=19
  $sobrenome = $_GET['sobrenome'];
  $idade = $_GET['idade'];
  echo $sobrenome.' '.$idade; //Silva 19;
```

##### $_POST

`$_POST` -> Pega informações que foram enviados atraves de um formulário, ele não passa as informação na url da página.
```php
  //...nome=bruno&idade=19
  if (isset($_POST['nome']) && isset($_POST['idade'])){
    $nome=limpaPost($_POST['nome']);
    $idade=limpaPost($_POST['idade']);
    echo "<h2>Nome: $nome <br> Idade: $idade</h2>";
    /*
      Nome: Bruno
      Idade: 19
    */
  }
  //função de segurança para o método POST
  function limpaPost($valor){
    $valor=trim($valor);
    $valor=stripslashes($valor);
    $valor=htmlspecialchars($valor);
    return $valor;
  }
```

#### Data manipulation
<p>https://www.php.net/manual/pt_BR/datetime.format.php -> tipos de input dentro de date().</p>
```php
  echo date('Y/m/d')."<br>"; //ano/mês/dia -> Mostra a data completa correspondentes do seu servidor.
  echo date('H:i:s')."<br>"; //hora(00 a 23):minutos:segundos -> Mostra a Hora completa correspondentes do seu servidor.
```

`strtotime($variablename)` -> Converte uma string para o formato de data.
```php
  $data='2022-10-15';
  $dataConvertida = strtotime($data);
```

#### Folders manipulation
`mkdir(nomePasta)` -> Cria uma pasta no diretório do arquivo php.
```php
  $nomePasta = "nova-pasta";
  mkdir($nomePasta);
```

`mkdir(nomePasta1/nomePasta2/.../)` -> Cria mais de uma pasta no diretório do arquivo php.
```php
    mkdir("teste/newfolder/", 0755, true);
```

`is_dir(nomePasta)` -> Verifica se há algum diretório existente.
```php
    var_dump(is_dir($nomePasta)); //true or false;
```

`rmdir(nomePasta)` -> Deleta uma pasta, deleta apenas pastas vazias.
```php
    rmdir($nomePasta); //true or false;
```

`chmod(diretorio, codigo)` -> Modifica as permissões do arquivo.
```php
    chmod($nomePasta, 0755); //mudou a permissão da pasta de acordo com o código 0755;
    
    //este exemplo verifica se a pasta existe, caso não, cria a pasta com a permissão 0755.
    if(!is_dir($nomePasta)){
      mkdir($nomePasta, 0755);
    }
    
    /*permissões mais usadas:
      0600: Escrita e leitura para o proprietario, nada ninguem mais;
      0644: Escrita e leitura para o proprietario, leitura para todos os outros;
      0755: Tudo para o proprietario, leitura e execucao para os outros;
      0750: Tudo para o proprietario, leitura e execucao para o grupo do prop.*/
```

`rename(nomePasta, novoNome)` -> Muda o nome da pasta.
```php
  rename($nomePasta, 'novo-nome'); //nova-pasta -> novo-nome;
```

`rename(nomePasta, novoNome)` -> Usamos o remane para mover pastas.
```php
  rename('teste/newFolder/','newFolder'); //neste exemplo a pasta 'newfolder' sairá da pasta teste e irá para a pasta original;
```

#### Include / Require

`..._once` -> Evita recarregamento do arquivo.

##### Include
`include('diretorio');` -> Inclui uma arquivo php dentro de um arquivo php, caso não consiga ele retorna um warning e continua o script.
```php
  include_once('include-test.php'); //Olá mundo!;
```
##### Require
`require('diretorio');` -> Inclui uma arquivo php dentro de um arquivo php, caso nao consiga ele retorna um erro fatal e para o script.
```php
  require_once('require-test.php'); //Olá mundo!;
```

#### File manipulation
`fopen(diretorio.nomeArquivo, modoExec)` -> Caso o arquivo exista ele irá abrir, caso não ele criará um arquivo.
```php
  $pasta = "arquivos/";

  if(!is_dir($pasta)){
    mkdir($pasta,0755);
  }

  $nome_arquivo = date('y-m-d-H-i-s')."txt";
  
  $arquivo = fopen($pasta.$nome_arquivo, 'a+');
```

`fwrite(nomeArquivo, 'content')` -> Escreve algo dentro do arquivo.
`PHP_EOL` -> Pula uma linha, sendo uma constante própria do PHP.
```php
  fwrite($arquivo, 'uma linha injetada pelo PHP'.PHP_EOL);
  fwrite($arquivo, 'uma linha injetada 2'.PHP_EOL);
  fwrite($arquivo, 'uma linha injetada 3'.PHP_EOL);
```

`fclose(nomeArquivo)` -> Fecha o arquivo aberto.
```php
   fclose($arquivo);
```

`file_exists(nomeArquivo ou diretorio.nomeArquivo)` -> Verifica se o arquivo existe.
`is_file(nomeArquivo ou diretorio.nomeArquivo)` -> Verifica se o arquivo é um arquivo.
`feof(nomeArquivo ou diretorio.nomeArquivo)` -> Pecorre ate o fim do arquivo.
`fgets(nomeArquivo ou diretorio.nomeArquivo)` -> Retorna uma linha de um arquivo.
`file_get_contents(nomeArquivo ou diretorio.nomeArquivo)` -> Lê todo o conteúdo de um arquivo para uma string.
`scandir(diretorio)` -> Retorna um array de arquivos e diretórios do diretório especificado.
`unlink(nomeArquivo ou diretorio.nomeArquivo)` -> Apaga um arquivo.
```php
  $caminho_arquivo = $pasta.$nome_arquivo;
    
  if(file_exists($caminho_arquivo) && is_file($caminho_arquivo)){
    $abrir_arquivo = fopen($caminho_arquivo, 'r');
    while(!feof($abrir_arquivo)){
      echo fgets($abrir_arquivo)."<br>";
    }
      fclose($abrir_arquivo);
    }
    
    if(file_exists($caminho_arquivo) && is_file($caminho_arquivo)){
      echo file_get_contents($caminho_arquivo);
    }
    
    if(is_dir($pasta)){
      foreach(scandir($pasta) as $arquivos){
        $caminho = $pasta.$arquivos;
        if(is_file($caminho)){
          unlink($caminho);
        }
     }
     rmdir($pasta);
   }
```

`copy(nomeArquivoFonte, nomeArquivoCopiado)` -> Copia um arquivo.
```php
  copy('exemplo.txt', 'exemplo-copiado.txt');
```

`file_put_contents(arquivo, conteudo)` -> É usada para escrever uma string em um arquivo, caso o arquivo não exista ele criará um
```php
  $arquivo_exemplo = "reset.css";
  file_put_contents($arquivo_exemplo, '*{margin: 0; padding: 0; box-sizing: 0;}');
```

