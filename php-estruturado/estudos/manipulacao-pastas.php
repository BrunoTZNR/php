<?php
    /* require e include */
    $nomePasta = "nova-pasta";

    //`mkdir(nomePasta)` -> Cria uma pasta no diretório do arquivo php.
    mkdir($nomePasta);
    //`mkdir(nomePasta1/nomePasta2/.../)` -> Cria mais de uma pasta no diretório do arquivo php.
    mkdir("teste/newfolder/", 0755, true);

    //`is_dir(nomePasta)` -> Verifica se há algum diretório existente.
    if(!is_dir($nomePasta)){
        mkdir($nomePasta);
    } //apenas criará a pasta caso não exita uma pasta com o nome escolhida;

    //`chmod(diretorio, codigo)` -> Modifica as permissões do arquivo.
    /* permissões:
        0600: Escrita e leitura para o proprietario, nada ninguem mais;
        0644: Escrita e leitura para o proprietario, leitura para todos os outros;
        0755: Tudo para o proprietario, leitura e execucao para os outros;
        0750: Tudo para o proprietario, leitura e execucao para o grupo do prop.*/
    if(!is_dir($nomePasta)){
        mkdir($nomePasta, 0755);
    } //apenas criará a pasta caso não exita uma pasta com o nome escolhida, com a permisão 0755(geralemnte o mais usado);

    //`rmdir(nomePasta)` -> Deleta uma pasta, deleta apenas pastas vazias.
    if(!is_dir($nomePasta)){
        mkdir($nomePasta, 0755);
    }else{
        rmdir($nomePasta);
    }

    //`rename(nomePasta, novoNome)` -> Muda o nome da pasta.
    rename($nomePasta, 'novo-nome'); //nova-pasta -> novo-nome;

    //`rename(nomePasta, nomePastaMovida)` -> Usamos o remane para mover pastas.
    rename('teste/newFolder/','newFolder');
?>