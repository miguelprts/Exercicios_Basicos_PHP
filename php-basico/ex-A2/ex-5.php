<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex-5.php" method="POST">
        <label for="a1">Nome do Apostador 1: </label>
        <input type="text" id="a1" name="a1">
        <label for="n1">Número</label>
        <input type="number" min="0" max="10" id="n1" name="n1"> <br>

        <label for="a2">Nome do Apostador 2: </label>
        <input type="text" id="a2" name="a2">
        <label for="n2">Número</label>
        <input type="number" min="0" max="10" id="n2" name="n2"> <br>
        
        <label for="a3">Nome do Apostador 3: </label>
        <input type="text" id="a3" name="a3">
        <label for="n3">Número</label>
        <input type="number" min="0" max="10" id="n3" name="n3"> <br>

        <label for="a4">Nome do Apostador 4: </label>
        <input type="text" id="a4" name="a4">
        <label for="n4">Número</label>
        <input type="number" min="0" max="10" id="n4" name="n4"> <br>

        <input type="submit" value="Apostar">
    </form>


    <?php
        if(isset($_POST['n1']) and isset($_POST['n2']) and isset($_POST['n3']) and isset($_POST['n4'])){
            $sort = rand(1, 10);
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
            $n4 = $_POST['n4'];

            if($n1 == $sort)
                echo $_POST['a1'] . " ganhou";
            elseif($n2 == $sort)
                echo $_POST['a2'] . " ganhou";
            elseif($n3 == $sort)
                echo $_POST['a3'] . " ganhou";
            elseif($n4 == $sort)
                echo $_POST['a4'] . " ganhou";
            else
                echo "Ninguém venceu!";
        } 
    ?>
</body>
</html>