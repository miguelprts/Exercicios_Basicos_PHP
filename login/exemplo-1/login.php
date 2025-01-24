<?php 
session_start();
require_once("autoload.php");
try{
    $usuario = Usuario::confere($_POST['email_login'],$_POST['senha_login']);
    if(!is_null($usuario)){
        $_SESSION['logado']=true;
        $_SESSION['usuario'] = serialize($usuario);
        header('Location: principal.php');
    }
    else{
        $_SESSION['logado'] = false;
        echo "<script>window.alert('Usuário o u senha incorretos.'); window.location.href='index.php#paralogin';</script>";
    }
}catch(PDOException $p){
    echo "Ocorreu o seguinte erro ao acessar a base de dados: <i>".$p->getMessage()." </i>";
}
?>