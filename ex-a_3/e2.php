<?php
function funcao(array $a): float{
    $s = 0;
    for ($i=0; $i < count($a); $i++) { 
        $s += $a[$i];
    }
    return $s / (count($a)-1);
}
$b = array(1, 2, 3);
echo 'Média: '. funcao($b);
?>