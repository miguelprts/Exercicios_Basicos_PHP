<?php
for ($i=0; $i < 100; $i++)
    $v[] = rand(0, 2500);

    $maior = 0;
for ($i=0; $i < count($v); $i++) { 
    if($v[$i] > $maior)
        $maior = $v[$i];
}
    echo "Maior: $maior.";
?>