<?php
    require __DIR__.'./conexao.php';
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    if(!empty($login) && !empty($senha)){
        $query = $conn->prepare("SELECT * FROM tb_usuario WHERE nome=? AND senha=?");
        $query->execute(array($login,$senha));
        
        if($query->rowCount() > 0){
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            
            header('location: acesso.php');
        }else{
                session_unset();
                session_destroy();
                echo "<script>
                    alert('login ou senha incorretos'); 
                    window.location.href='index.php';
                    </script>";
        }
    }
?>