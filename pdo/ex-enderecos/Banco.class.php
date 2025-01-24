<?php
    class Banco{
        public static function conexao():PDO{
            try{
                return new PDO("mysql:host=localhost;dbname=exercicio_1;","root","12345678");
            } catch(PDOException $e){
                throw new PDOException($e->getMessage());
            }
        }
    }

?>