<?php
session_start();
if(!isset($_SESSION['logado']) || !$_SESSION['logado']){
    echo 'você não tem direito de estar aqui!';
    include 'index.php';
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>a</li>
        <li>a</li>
        <li>a</li>
        <li>a</li>
        <li>a</li>
    </ul>
</body>
</html>