<?php 
session_start();
$_SESSION = array();
session_destroy();
header('Location: index.php');
?>

<?php
session_start();
$_SESSION = array();
setcookie('controle',null, -1, "/");
session_destroy();
header('Location: index.php');
?>