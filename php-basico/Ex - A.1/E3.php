<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E3</title>
</head>
<body>
    
<?php
//Faça um programa em PHP que sorteie três números aleatórios entre 0 e 100 e imprima o maior e o menor entre eles. Utilize operadores lógicos em conjunto com as estruturas condicionais se for preciso;
    $n1 = rand(1, 100);
    $n2 = rand(1, 100);
    $n3 = rand(1, 100);

    if ($n1 > $n2 and $n1 > $n3) 
        echo "maior: $n1. <br>";
    elseif ($n2 > $n1 and $n2 > $n3) {
        echo "maior: $n2. <br>";
    }
    else
        echo "maior: $n3.  <br>";

    if ($n1 < $n2 and $n1 < $n3) 
        echo "menor: $n1. <br>";
    elseif ($n2 < $n1 and $n2 < $n3) 
        echo "menor: $n2. <br>";
    else
        echo "menor: $n3. <br>";

?>

</body>
</html>