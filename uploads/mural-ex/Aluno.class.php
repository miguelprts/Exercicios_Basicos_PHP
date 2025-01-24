<?php 
class Aluno{
    private $foto; private $nome; private $email; private $expectativas;
    
    public function getNome():string{
        return $this->nome;
    }
    public function getEmail():string{
        return $this->email;
    }   public function getExpectativas():string{
        return $this->expectativas;
    }   public function getFoto():string{
        return $this->foto;
    }
}
?>