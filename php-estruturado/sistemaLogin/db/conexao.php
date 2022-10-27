<?php
    session_start();

    //REQUERIMENTO DO PHPMAILER
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require ('./PHPMailer/src/Exception.php');
    require ('./PHPMailer/src/PHPMailer.php');
    require ('./PHPMailer/src/SMTP.php');

    //DOIS MODOS POSSIVEIS -> local, producao
    $modo='local';

    if($modo=='local'){
        $servidor='localhost';
        $usuario='root';
        $senha='';
        $banco='login';
    }

    if($modo=='producao'){
        $servidor='';
        $usuario='';
        $senha='';
        $banco='';
    }
    $conn=new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
    try{
        $conn=new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo "Falha ao se conectar com o banco";
    }

    function limparPost($dados){
        $dados=trim($dados);
        $dados=stripslashes($dados);
        $dados=htmlspecialchars($dados);
        return $dados;
    }

    function auth($tokenSessao){
        global $conn;
        //VERIFICAR SE TEM AUTORIZAÇÃO
        $sql=$conn->prepare("SELECT * FROM usuarios WHERE token=? LIMIT 1");
        $sql->execute(array($tokenSessao));
        $usuario=$sql->fetch(PDO::FETCH_ASSOC);
        //SE NAO ENCONTRAR O USUARIO
        if(!$usuario){
            return false;
        }else{
            return $usuario;
        }
    }
?>