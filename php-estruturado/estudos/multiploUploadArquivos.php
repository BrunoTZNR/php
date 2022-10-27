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
            <input type="file" class="form-control" name="arquivo[]" id="arquivo" multiple aria-describedby="arquivo" aria-label="Upload" required>
            <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
        </div>
        </form>
    </div>

    <?php
        function reArrayFiles(&$file_post) {

            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);
        
            for ($i=0; $i<$file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }
        
            return $file_ary;
        }

        if(isset($_POST['enviar'])){
            $arquivoArray = reArrayFiles($_FILES['arquivo']);

            foreach ($arquivoArray as $arquivo) {
                echo "<p>";
                //validações
                $tamanhoMax = 2097152; //2MB
                $permitido = array("jpg","png","jpeg","mp4");
                $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);

                //verificar se tem tamanho permitido
                if($arquivo['size'] > $tamanhoMax){
                    echo "<b>".$arquivo['name']."</b> -> erro: tamanho máximo de 2MB. Não foi possivel fazer upload";
                }else{
                    //verificar se extensão é permitida
                    if(in_array($extensao, $permitido)){
                        $pasta = "imagens/";
                        if(!is_dir($pasta)){
                            mkdir($pasta,0755);
                        }

                        $tmp = $arquivo['tmp_name'];
                        $novoNome = uniqid().".$extensao";

                        if(move_uploaded_file($tmp, $pasta.$novoNome)){
                            echo "<b>".$arquivo['name']."</b> : upload realizado com sucesso!<br>";
                        }else{
                            echo "<b>".$arquivo['name']."</b> -> erro: não foi possivel fazer o upload<br>";
                        }
                    }else{
                        echo "<b>".$arquivo['name']."</b> -> erro: Extensão ($extensao) não permitida";
                    }
                }
                echo "</p>";
            }
        }
    ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>