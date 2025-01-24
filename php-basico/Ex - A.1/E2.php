<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2</title>
</head>
<body>
    
<?php
// Faça um programa em PHP que sorteie um número aleatório entre 1 e 10. Caso o número seja entre 1 e 7, imprima o dia da semana correspondente (sendo 1 domingo e 7 sábado). Caso o número sorteado não seja um dia da semana válido, imprima uma mensagem com esta informação.
    $n = rand(1, 10);

    switch ($n) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda-feira";
            break;
        case 3:
            echo "Terça-feira";
            break;
        case 4:
            echo "Quarta-feira";
            break;
        case 5:
            echo "Quinta-feira";
            break;
        case 6:
            echo "Sexta-feira";
            break;
        case 7:
            echo "Sábado";
            break;
        default:
            echo "sem dia determinado!";
            break;
    }
?>

</body>
</html>