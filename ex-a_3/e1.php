<?php
function pares(array $a): int{
    for( $i = 0; $i < count($a); $i++ ){
        if($a[$i]%2 == 0 and $a[$i]!= 0 )
            $soma++;
    }
    return $soma;
}
for ($i=0; $i < 10; $i++) 
    $a[] = rand(0, 10);
var_dump($a);
echo pares($a);
?>