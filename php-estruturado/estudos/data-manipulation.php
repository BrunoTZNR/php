<?php
    /* manipular data e hora - date() */

    //https://www.php.net/manual/pt_BR/datetime.format.php -> tipos de input dentro de date().
    
    echo date('d/m/Y')."<br>"; //dia/mês/ano -> Mostra a data completa correspondentes do seu servidor.
    echo date('H:i:s')."<br>"; //hora(00 a 23):minutos:segundos -> Mostra a Hora completa correspondentes do seu servidor.


    //CALCULAR DIAS ENTRE DATAS

    $hoje=date('Y-m-d'); //2022-06-15
    $vencimento='2022-10-15';

    $diferenca=strtotime($vencimento) - strtotime($hoje);
    $dias=floor($diferenca/(60*60*24));

    echo "A diferença é de $dias entre as datas"; //A diferença é de 122 entre as datas;

    //CONVERSÃO DATA PADRÃO USA PARA PADRÃO BR
    $data_hoje=explode('-',$hoje);
    $hoje_formatado=$data_hoje[2]."/".$data_hoje[1]."/".$data_hoje[0]; //05/06/2022

    echo "<br>".$hoje_formatado;

    //COMPARAR DUAS DATAS MAIOR OU MENOR
    $data1='2022-09-15';
    $data2='2022-09-20';
    $resp=(strtotime($data1)) > (strtotime($data2))?"A data 1 é maior que a data 2":"A data 2 é maior que a data 1";
    echo "<br>".$resp; //A data 2 é maior que a data 1;

    /*meses
    $mes=date('F');
    switch($mes){
        case 'January':
            echo "Janeiro";
        break;
        case 'February':
            echo "Fervereiro";
        break;
        case 'March':
            echo "Março";
        break;
        case 'April':
            echo "Abril";
        break;
        case 'May':
            echo "Maio";
        break;
        case 'June':
            echo "Junho";
        break;
        case 'July':
            echo "Julho";
        break;
        case 'August':
            echo "Agosto";
        break;
        case 'September':
            echo "Setembro";
        break;
        case 'October':
            echo "Outubro";
        break;
        case 'November':
            echo "Novembro";
        break;
        case 'December':
            echo "Dezembro";
        break;
    }*/
?>