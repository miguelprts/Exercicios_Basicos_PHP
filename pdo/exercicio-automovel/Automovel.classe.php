<?php 
require_once "Banco.class.php";
class Automovel{
    public function inserir(int $cpf, $nome, $email, $telefone, $sexo):void{
        $conexao = Banco::conectar();
    }
}
?>