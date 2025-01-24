<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ex-4.php" method='POST'>
        <label for="l1">Lado 1: </label>
        <input type="number" id="l1" name="l1"><br>

        <label for="l2">Lado 2: </label>
        <input type="number" id="l2" name="l2"><br>

        <label for="l3">Lado 3: </label>
        <input type="number" id="l3" name="l3"><br>

        <label for="l4">Lado 4: </label>
        <input type="number" id="l4" name="l4"><br>

        <input type="submit" value="Descobrir">
    </form>
    <?php
        if(isset($_POST['l1']) and isset($_POST['l2']) and isset($_POST['l3']) and isset($_POST['l4'])){
            $l1 = $_POST['l1'];
            $l2 = $_POST['l2'];
            $l3 = $_POST['l3'];
            $l4 = $_POST['l4'];

            if(($l1 != $l2) and ($l1 != $l3) and ($l1 != $l4) and ($l2 != $l3) and ($l3 != $l4))
                echo "Quadrilátero";
            elseif (($l1 != $l3) or ($l2 != $l4) or($l3 != $l2)) 
                echo "Retângulo";
            elseif (($l1 == $l2) and )
                echo "Retângulo";
    ?>
</body>
</html>