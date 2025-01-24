<?php
class Numero{
    public int $n1;
    public int $n2;

    public function somar(): int{
        return $this->n1 + $this->n2;
    }
    public function subtrair(): int{
        return $this->n1 - $this->n2;
    }
    public function dividir(): int{
        return $this->n1 / $this->n2;
    }
    public function multiplicar(): int{
        return $this->n1 * $this->n2;
    }
}

$n = new Numero();
$n->n1 = 9;
$n->n2 = 8;

echo("Soma: ".$n->somar());
echo("Subtrair: ".$n->subtrair());
echo("Dividir: ".$n->dividir());
echo("Multiplicar: ". $n->multiplicar());

?>