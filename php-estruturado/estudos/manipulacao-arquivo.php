<?php
    /* Manupulação de arquivos */
    $pasta = "arquivos/";

    if(!is_dir($pasta)){
        mkdir($pasta,0755);
    }

    $nome_arquivo = date('y-m-d-H-i-s')."txt";

    //`fopen(diretorio.nomeArquivo, modoExec)` -> Caso o arquivo exista ele irá abrir, caso não ele criará um arquivo.
    $arquivo = fopen($pasta.$nome_arquivo, 'a+');
    
    //`fwrite()` -> Escreve algo dentro do arquivo.
    //`PHP_EOL` -> Pula uma linha, sendo uma constante própria do PHP.
    fwrite($arquivo, 'uma linha injetada pelo PHP'.PHP_EOL);
    fwrite($arquivo, 'uma linha injetada 2'.PHP_EOL);
    fwrite($arquivo, 'uma linha injetada 3'.PHP_EOL);

    //`fclose()` -> Fecha o arquivo aberto.
    fclose($arquivo);

    //`file_exists(diretorio.nomeArquivo)` -> Verifica se o arquivo existe.
    //`is_file(diretorio.nomeArquivo)` -> Verifica se o arquivo é um arquivo.

    $caminho_arquivo = $pasta.$nome_arquivo;
    
    if(file_exists($caminho_arquivo) && is_file($caminho_arquivo)){
        $abrir_arquivo = fopen($caminho_arquivo, 'r');

        //`feof()` -> Verifica se o arquivo é um arquivo.
        while(!feof($abrir_arquivo)){

            //`fgets()` -> Verifica se o arquivo é um arquivo.
            echo fgets($abrir_arquivo)."<br>";
        }

        fclose($abrir_arquivo);
    }
    
    if(file_exists($caminho_arquivo) && is_file($caminho_arquivo)){

        //`file_get_contents()` -> Verifica se o arquivo é um arquivo.
        echo file_get_contents($caminho_arquivo);
    }
    
    if(is_dir($pasta)){

        //`scandir()` -> Verifica se o arquivo é um arquivo.
        foreach(scandir($pasta) as $arquivos){
            $caminho = $pasta.$arquivos;
            if(is_file($caminho)){

                //`unlink()` -> Verifica se o arquivo é um arquivo.
                unlink($caminho);
            }
        }

        rmdir($pasta);
    }

    //`copy(nomeArquivoFonte, nomeArquivoCopiado)` -> Copia um arquivo.
    copy('exemplo.txt', 'exemplo-copiado.txt');

    //`file_gput_contents(arquivo, conteudo)` -> Verifica se o arquivo é um arquivo.
    $arquivo_exemplo = "reset.css";
    file_put_contents($arquivo_exemplo, '*{margin: 0; padding: 0; box-sizing: 0;}');
?>