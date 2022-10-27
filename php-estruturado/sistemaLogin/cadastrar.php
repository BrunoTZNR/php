<?php

use PHPMailer\PHPMailer\PHPMailer;

    require('./db/conexao.php');

    //VERIFICAR SE A POSTAGEM EXISTE
    if(isset($_POST['nome'])&&isset($_POST['email'])&&isset($_POST['senha'])&&isset($_POST['repete_senha'])){
        //VERIFICAR SE TODOS OS CAMPOS FORAM PREENCHIDOS
        if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['repete_senha']) || empty($_POST['termos'])){
            $erro_geral="Todos os campos são obrigatórios!";
        }else{
            //RECEBER VALORES VINDOS DO POST E LIMPAR
            $nome=limparPost($_POST['nome']);
            $email=limparPost($_POST['email']);
            $senha=limparPost($_POST['senha']);
            //CRIPITOGRAFA A SENHA
            $senha_cript = sha1($senha);
            $repete_senha=limparPost($_POST['repete_senha']);
            $checkbox=limparPost($_POST['termos']);

            //VERIFICAR SE NOME É APENAS LETRAS
            if(!preg_match("/^[a-zA-ZÀ-ú]*$/", $nome)){
                $erro_nome="Somente permitido letras";
            }

            //VERIFICAR SE EMAIL É VALIDO
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erro_email="Formato de email inválido";
            }

            //VERIFICAR SE SENHA TEM MAIS QUE 6 DIGITOS
            if(strlen($senha) < 6){
                $erro_senha="Senha deve ter 6 caracteres ou mais";
            }

            //VERIFICAR SE REPETE_SENHA É IGUAL SENHA
            if($senha !== $repete_senha){
                $erro_repete_senha="Senha e repetição de senha diferentes";
            }

            //VERIFICAR SE CHECKBOX FOI MARCADO
            if($checkbox !== 'ok'){
                $erro_checkbox="Desativado";
            }

            if(!isset($erro_geral) && !isset($erro_nome) && !isset($erro_email) && !isset($erro_senha) && !isset($erro_repete_senha) && !isset($erro_checkbox)){
                //VERIFICAR SE EMAIL JA ESTA CADASTRADO NO BANCO
                $sql=$conn->prepare("SELECT * FROM usuarios WHERE email=? LIMIT 1");
                $sql->execute([$email]);
                //PEGA O RESULTO DA QUERY
                $usuario = $sql->fetch();

                //SE NAO EXISTIR O EMAIL - ADICIONAR NO BANCO
                if(!$usuario){
                    $recupera_senha="";
                    $token="";
                    $codigo_confirmacao=uniqid();
                    $status="novo";
                    $data_cadastro= date('Y-m-d');
                    $sql=$conn->prepare("INSERT INTO usuarios VALUES (DEFAULT,?,?,?,?,?,?,?,?)");
                    if($sql->execute(array($nome,$email,$senha_cript,$recupera_senha,$token,$status,$codigo_confirmacao,$data_cadastro))){
                        //SE O MODO FOR LOCAL
                        if($modo=='local'){
                            header('location: index.php?result=true');
                        }

                        //SE O MODO FOR PRODUÇÃO
                        if($modo=='producao'){
                            //ENVIAR EMAIL PARA USUARIO
                            $mail=new PHPMailer(true);

                            try{
                                //Recipients
                                $mail->setFrom('from@example.com', 'Sistema de Login'); //QUEM ESTÁ MANDANDO E-MAIL
                                $mail->addAddress($email, $nome); //QUEM RECEBERÁ O EMAIL

                                //Content
                                $mail->isHTML(true); //CORPO DO EMAIL COMO HTML
                                $mail->Subject = 'Confirme seu Cadastro'; //TIRULO DO EMAIL
                                $mail->Body = '<h1>Por favor confirme seu e-mail abaixo:</h1><br><br><a style="background:green;color:#fff;padding:1.3rem;border-radius:.35rem;text-decoration:none;" href="https://seusistema.com.br/confirmacao.php?cod_confirm='.$codigo_confirmacao.'">Confirmar E-mail</a>';
                            
                                $mail->send();
                                header('location: obrigado.php');
                            }catch(Exception $e){
                                echo "Houve um problema ao enviar email de confirmação: {$mail->ErrorInfo}";
                            }
                        }
                    }
                }else{
                    //JA EXISTE EMAIL - APRESENTAR ERRO
                    $erro_geral="Usuario já cadastrado!";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/style.css">

    <title>Cadastrar</title>
</head>
<body>
    <form method="post">
        <h1>Cadastrar</h1>

        <?php if(isset($erro_geral)){ ?>
        <div class="erro-geral">
        <?php echo $erro_geral; ?>
        </div>
        <?php } ?>

        <div class="input-group">
            <img class="input-icon" src="./img/card.png">
            <input <?php if(isset($erro_geral) || isset($erro_nome)){echo 'class="erro-input"';}?> 
            type="text" name="nome" placeholder="Nome" 
            <?php if(isset($_POST['nome'])){echo "value='".$_POST['nome']."'";} ?> required>
            <?php if(isset($erro_nome)){echo "<div class='erro'>$erro_nome</div>";} ?>
            
        </div>

        <div class="input-group">
            <img class="input-icon" src="./img/user.png">
            <input <?php if(isset($erro_geral) || isset($erro_email)){echo 'class="erro-input"';}?> 
            type="email" name="email" placeholder="Seu melhor email" 
            <?php if(isset($_POST['email'])){echo "value='".$_POST['email']."'";} ?> required>
            <?php if(isset($erro_email)){echo "<div class='erro'>$erro_email</div>";} ?>
        </div>

        <div class="input-group">
            <img class="input-icon" src="./img/lock.png">
            <input <?php if(isset($erro_geral) || isset($erro_senha)){echo 'class="erro-input"';}?> 
            type="password" name="senha" placeholder="Senha mínimo de 6 Dígitos" 
            <?php if(isset($_POST['senha'])){echo "value='".$_POST['senha']."'";} ?> required>
            <?php if(isset($erro_senha)){echo "<div class='erro'>$erro_senha</div>";} ?>
        </div>

        <div class="input-group">
            <img class="input-icon" src="./img/lock-open.png">
            <input <?php if(isset($erro_geral) || isset($erro_repete_senha)){echo 'class="erro-input"';}?> 
            type="password" name="repete_senha" placeholder="Repita a senha criada" 
            <?php if(isset($_POST['repete_senha'])){echo "value='".$_POST['repete_senha']."'";} ?> required>
            <?php if(isset($erro_repete_senha)){echo "<div class='erro'>$erro_repete_senha</div>";} ?>
        </div>

        <div <?php if(isset($erro_geral) || isset($erro_checkbox)){echo 'class="input-group erro-input"';}else{echo 'class="input-group"';}?>>
            <input type="checkbox" name="termos" id="termos" value="ok" required>
            <label for="termos">Ao se cadastrar você concorda com a nossa <a class="link" href="#">Política de Privacidade</a> e os <a class="link" href="#">Termos de Uso</a></label>
        </div>
        
        <button class="btn-blue" type="submit">Cadastrar</button>
        <a href="./index.php">Ja tenho uma conta</a>
    </form>
</body>
</html>