<?php
session_start();

$u = $_POST['user'];
$s = $_POST['senha'];

if($u == 'professor' && $s=='bacana'){
    $_SESSION['logado'] = true;
    header('Location: sigiloso.php');
 }
else{
    $_SESSION['logado'] = false;
    echo "Usuário ou senha errados";
    include "index.php";
}
?>