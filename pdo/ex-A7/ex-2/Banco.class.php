<?php 
    class Banco{
        public static function conectar():PDO{
            try {
                return new PDO("mysql:host=localhost; dbname=exercicio_2","root","12345678");
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage());
            }
        } 
    }
?>