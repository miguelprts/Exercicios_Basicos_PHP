<?php
function soma(array $a, array $b): array {
    $indice = count($a) + (count($a) - count($b));
    if($indice < 0)
        $indice *=-1;

    for($i=0; $i < $indice; $i++) {
        if(!isset($a[$i]))
            $c[$i] = $b[$i];
        elseif(!isset($b[$i]))
            $c[$i] = $a[$i];
        else
            $c[$i] = $a[$i] + $b[$i];
    }
    return $c;
}

$i = array(1, 2, 4, 5, 6);
$j = array(1, 2, 4, 5);

var_dump(soma($i, $j));
?>