<?php
class Escola{
    public function conectar():PDO{
        try {
            return new PDO("mysql:host=localhost;dbname=escola;","root","12345678");
        } catch (PDOException $e) {
           throw new PDOException($e->getMessage());
        }
    }
}
?>