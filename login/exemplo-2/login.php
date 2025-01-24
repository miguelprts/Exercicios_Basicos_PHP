<?php 
session_start();
require_once("autoload.php");
try{
    if(isset($_COOKIE['controle'])){
        $email = $_COOKIE['controle'];
        $usuario = Usuario::livreAcesso($email);

        if(!is_null($usuario)){
            $usuario->setNome($usuario->getNome()."[Login Automático]");
        } else{
            $email = $_POST['email_login'];
            $senha = $_POST['senha_login'];
            $usuario = Usuario::confere($email,$senha);
        }
    }
    if(!is_null($usuario)){
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = serialize($usuario);
        if(isset($_POST['manterlogado'])){
            setcookie('controle', $email, time()+60*60*24*10, "/");
        }
        header('Location: principal.php');
    }
    else{
        $_SESSION['logado'] = false;
        setcookie("controle", null, -1, "/");
        echo "<script>window.alert('Usuário ou senha incorretos.');window.location.href='index.php#paralogin';</script>";
    }
} catch(PDOException $p){
    echo "Ocorreu um erro ao tentar acessar a base de dados: ".$p->getMessage();
}
?>