<?php
if(isset($_COOKIE))
    setcookie($_POST['user'], $_POST['senha'], time() + 86400*2, '/');

if(!isset($_COOKIE['user']))
    header("Location: sigiloso.php");
else{
    echo "Tente outra vez";
    include_once("index.php");
}
?>