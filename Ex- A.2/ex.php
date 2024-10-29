<?php
if (!isset($_COOKIE['count']) ) {
    setcookie('count',0, time()+(86400),"/");
    } else 
    setcookie( 'count', $_COOKIE['count']+1 , time()+(86400) ,"/" ) ;   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="ex.php">
      <label for="n">Número</label>
      <input name="n" type="number">
        <button type="submit">Somar</button>
    </form>

    <?php

    if(isset($_GET['X']))


    if(!isset($_POST['n'])){
        $_COOKIE['n'] = 0;
        echo "soma está em 0";
    }
    else{
        if(empty($_POST["n"]))
        $total = 0;

        else
        $total = $_POST['n'];

        $_COOKIE['n'] += $total;
        echo "soma está em " . $_COOKIE['n'];
    }
    ?>

    <a href="ex.php?x=0">Zerar contagem</a>

</body>
</html>