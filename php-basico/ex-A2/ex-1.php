<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex-1.php" method="POST">
        <label for="n">Fatorial de: </label>
        <input type="number" id="n" name="n">
        <input type="submit" value="Calcular">
    </form>

    <?php
        if(isset($_POST['n'])){
        $n = $_POST['n']--;
        $resultado = 1;

        for ($i=1; $i <= $n; $i++) { 
            $resultado *= $i;
        }
        echo "<br>$n! = $resultado";
        }
    ?>
</body>
</html>