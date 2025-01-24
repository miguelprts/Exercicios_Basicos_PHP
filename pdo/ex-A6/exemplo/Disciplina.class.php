<?php
require_once "Escola.class.php";
class Disciplina{
    public function inserir(string $desc) :void{
        try{
            $banco = new Escola();
            $con = $banco->conectar();
            $SQL = "insert into disciplinas (id, descricao) values (null, ?)";
            $pst = $con->prepare($SQL);
            $pst->bindParam(1, $desc);
            $pst->execute();
        } catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }
}
?>