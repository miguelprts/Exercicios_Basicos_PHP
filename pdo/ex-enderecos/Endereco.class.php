<?php
    require_once "Banco.class.php";

    class Endereco{
        private $cep;
        private $logradouro;
        private $bairro;
        private $cidade;
        private $estado;

        public function getCep(){
            return $this->cep;  
        }
        public function getBairro(){
            return $this->bairro;  
        }
        public function getCidade(){
            return $this->cidade;  
        }
        public function getLogradouro(){
            return $this->logradouro;  
        }
        public function getEstado(){
            return $this->estado;  
        }

        public function setCep($cep){
            return $this->cep = $cep;  
        }
        public function setCidade($cidade){
            return $this->cidade = $cidade;  
        }
        public function setBairro($bairro){
            return $this->bairro = $bairro;  
        }
        public function setLogradouro($logradouro){
            return $this->logradouro = $logradouro;  
        }
        public function setEstado($estado){
            return $this->estado = $estado;  
        }
    
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

        public static function getEnderecos():array{
            try{
                $conexao = Banco::conexao();
                $SQL = "select * from enderecos";
                $pst = $conexao->prepare($SQL);
                $pst->execute();

                $dadosBd = $pst->fetchAll(PDO::FETCH_OBJ);
                $dados = array();

                foreach ($dadosBd as $dado) {
                    $d = new Endereco();
                    $d->setCep($dado->CEP);
                    $d->setBairro($dado->bairro);
                    $d->setCidade($dado->cidade);
                    $d->setEstado($dado->estado);
                    $d->setLogradouro($dado->logradouro);

                    $dados[] = $d;
                }
                return $dados;

            }catch(PDOException $e){
                throw new PDOException($e->getMessage());
            }
        }
    }
?>