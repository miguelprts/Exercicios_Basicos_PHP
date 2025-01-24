<?php 
    require_once("Conexao.class.php");
    
    class Usuario{
        private string $nome;
        private string $email;
        private string $senha;

        public function __construct(string $nome = "", string $email="", string $senha=""){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function salvar(): void{
            if($this->liberado()){
                try{
                    $con = Conexao::conectar();
                } catch(PDOException $p){
                    throw new PDOException($p->getMessage());
                }
                $SQL ="insert into usuarios (nome, email, senha) values (?,?, md5(?))";
                try{
                    $pst = $con->prepare($SQL);
                    $pst->bindValue(1, $this->getNome());
                    $pst->bindValue(2, $this->getEmail());
                    $pst->bindValue(3, $this->getSenha());
                    $pst->execute();
                }catch(PDOException $p){
                    throw new PDOException("Ocorreu um erro ao tentar salvar os dados. <br>Verifique <i>".$p->getMessage()."</i>");
                }
            }
            else{
                throw new PDOException("O Email infromado já foi cadastrado.");
            }
        }

        public function liberado(): bool{
            try{
                $con = Conexao::conectar();
            } catch(PDOException $p){
                throw new PDOException($p->getMessage());
            }
            $SQL = "select count(*) from usuarios where email=?";
            try{
                $pst = $con->prepare($SQL);
                $pst->bindValue(1, $this->getNome());
                $pst->execute();
                $dado = $pst->fetch(PDO::FETCH_NUM);
                return $dado[0] == 0;
            } catch(PDOException $p){
                throw new PDOException("Ocorreu um erro ao tentar acessar a base de dados. <br>Verifique: <i>".$p->getMessage()."</i>");
            }
        }

        public static function confere(string $email, string $senha):?Usuario{
            try{
                $con = Conexao::conectar();
            } catch(PDOException $p){
                throw new PDOException($p->getMessage());
            }

            $SQL = "select * from usuarios where email = ? and senha = md5(?)";
            try{
                $pst = $con->prepare($SQL);
                $pst->bindParam(1, $email);
                $pst->bindParam(2, $senha);
                $pst->execute();
                $dado = $pst->fetch(PDO::FETCH_OBJ);
                if($pst->rowCount()>0){
                    $usuario = new Usuario($dado->nome, $dado->email, $senha, $dado->nivel);
                    return $usuario;
                }
                else
                    return null;
            }catch(PDOException $p){
                throw new Exception("Ocorreu um erro ao acessar a base de dados. <br>Verifique: <i>".$p->getMessage()."</i>");
            }
        }

        public static function livreAcesso(string $email):?Usuario{
            try{
                $con = Conexao::conectar();
            } catch(PDOException $e){
                throw new PDOException($e->getMessage());
            }

            $SQL = "select * from usuarios where email = ?";
            try{
                $pst = $con->prepare($SQL);
                $pst->bindParam(1, email);
                $pst->execute();
                $dado = $pst->fetch(PDO::FETCH_OBJ);

                if($pst->rowCount()>0){
                    $usuario = new Usuario($dado->nome, $dado->email, "");
                    return $usuario;
                }else
                    return null;
            }catch(PDOException $p){
                throw new PDOException("Ocorreu um erro ao tentar acessar a base de dados: ".$p->getMessage());
            }
        }

        public function getNome():string{
            return $this->nome;
        }
        public function getEmail():string{
            return $this->email;
        }
        public function getSenha():string{
            return $this->senha;
        }

        public function setSenha(string $senha):void{
            $this->senha=$senha;
        }
        public function setNome(string $nome):void{
            $this->nome=$nome;
        }public function setEmail(string $email):void{
            $this->email=$email;
        }
    }
?>