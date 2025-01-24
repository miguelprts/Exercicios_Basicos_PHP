<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex-3.php" method="POST">
        <label for="name">Nome </label>
        <input type="text" id="name" name="name"> <br>
        <label for="s">Seu salário: R$</label>
        <input type="number" id="s" name="s" step="0.1"> <br>
        
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST['s'])){
            $s = $_POST['s'];
            $con = 0;

            if($s <= 1412)
                $con = ($s * 7.5)/100;
            else if($s <= 2666.68 )
                $con = ($s * 9)/100;
            else if($s <= 4000.03)
                $con = ($s * 12)/100;
            else if($s <= 7786.02)
                $con = ($s * 14)/100;
            else if($s > 7786.02)
                $con = ($s * 14)/100;

        echo "sua contribuição será de: R$$con.";
        }
    ?>
</body>
</html>