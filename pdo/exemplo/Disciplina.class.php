<?php
require_once "Escola.class.php";
class Disciplina{
    private int $id;
    private string $descricao;
    public function getId(): int{
        return $this->id;
    }
    public function getDescricao(): string{
        return $this->descricao;
    }
    public function setId(int $id): void{
        $this->id = $id;
    }public function setDescricao(string $descricao): void{
        $this->descricao = $descricao;
    }

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

    public static function getDisciplinas():array{
        try{
            $banco = new Escola();
            $con = $banco->conectar();
            $SQL = "select id, descricao from disciplinas";
            $pst = $con->prepare($SQL);
            $pst->execute();

            $dados = $pst->fetchAll(PDO::FETCH_OBJ);
            $disciplinas = array();

            foreach($dados as $row){
                $d = new Disciplina();
                $d->setId($row->id);
                $d->setDescricao($row->descricao);

                array_push($disciplinas, $d);
            }
            return $disciplinas;
        
        }catch( PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }
}
?>