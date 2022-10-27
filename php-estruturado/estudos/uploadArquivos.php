<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Upload de arquivos</title>
</head>
<body>

    <div class="container">
        <h1 class="mt-5 text-center">Upload de Arquivos</h1>

        <form method="post" enctype="multipart/form-data" class="m-3">
        <div class="input-group">
            <input type="file" class="form-control" name="arquivo" id="arquivo" aria-describedby="arquivo" aria-label="Upload" required>
            <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
        </div>
        </form>
    </div>

    <?php
        if(isset($_POST['enviar'])){
            /*
            echo "<pre>";
            var_dump($_FILES);
            echo "</pre>";
            */
            //validações
            $tamanhoMax = 2097152; //2MB
            $permitido = array("jpg","png","jpeg","mp4");

            /*
            `pathinfo(arquivo, opção)` -> Retorna informações sobre um caminho de arquivo.
            $pathPartes = pathinfo('/www/htdocs/index.html');
            echo $path_parts['dirname'];     /www/htdocs
            echo $path_parts['basename'];    index.html
            echo $path_parts['extension'];   html
            echo $path_parts['filename'];    index 
            */
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

            //verificar se tem tamanho permitido
            if($_FILES['arquivo']['size'] > $tamanhoMax){
                echo "Tamanho máximo de 2MB. Não foi possivel fazer upload";
            }else{
                //verificar se extensão é permitida
                if(in_array($extensao, $permitido)){
                    $pasta = "imagens/";
                    if(!is_dir($pasta)){
                        mkdir($pasta,0755);
                    }

                    $tmp = $_FILES['arquivo']['tmp_name'];

                    //`uniqid()` -> Gera um ID unico.
                    $novoNome = uniqid().".$extensao";

                    //`move_uploaded_file(fileName, destino)` -> Move um arquivo enviado para uma nova localização.
                    if(move_uploaded_file($tmp, $pasta.$novoNome)){
                        echo "Upload realizado com sucesso!<br>";
                    }else{
                        echo "Não foi possivel fazer o upload<br>";
                    }
                }else{
                    echo "Erro: Extensão ($extensao) não permitida";
                }
            }
        }
    ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>