<?php
    require_once "Banco.class.php";

    class Endereco{
        public function inserir($cep, $logradouro, $bairro, $cidade, $estado){
            try{
                $conexao = Banco::conexao();
                $SQL = "insert into enderecos values(?,?,?,?,?)";
                
                $pst = $conexao->prepare($SQL);
                $pst->bindParam(1, $cep);
                $pst->bindParam(2, $logradouro);
                $pst->bindParam(3, $bairro);
                $pst->bindParam(4, $cidade);
                $pst->bindParam(5, $estado);
                $pst->execute();
            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>