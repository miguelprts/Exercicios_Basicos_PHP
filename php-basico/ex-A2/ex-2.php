<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex-2.php" method="POST">
            <label for="name">Nome </label>
            <input type="text" id="name" name="name"> <br>
            <label for="n1">Nota da prova 1: </label>
            <input type="number" id="n1" name="n1"> <br>
            <label for="n2">Nota da prova 2: </label>
            <input type="number" id="n2" name="n2"> <br>
            <label for="n3">Nota da prova 3: </label>
            <input type="number" id="n3" name="n3"> <br>
            
            <input type="submit" value="Calcular">
    </form>

    <?php
        if(isset($_POST['n1']) and isset($_POST['n2']) and isset($_POST['n3'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];

            if(($n1 > 3 or $n1 < 0) or ($n2 > 3 or $n2 < 0) or ($n3 > 4 or $n3 < 0)){
                die("A(s) nota(s) não está(ão) correta(s)!");
            }
            else{
                $r= $n1 + $n2 + $n3;

                if($r < 4)
                    echo 'reprovado!';
                else if($r < 4 and $r> 6)
                    echo "dá para recuperar!";
                else
                    echo "Aprovado!";
            }
        }
    ?>
</body>
</html>