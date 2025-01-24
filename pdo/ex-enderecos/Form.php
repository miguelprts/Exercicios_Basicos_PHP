<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir endereço</title>
</head>
<body>
    <form method="POST" action="Form.php">
        <input type="text" name="cep" maxlength="8" placeholder="CEP">
        <input type="text" name="logradouro" placeholder="Logradouro">
        <input type="text" name="bairro" placeholder="Bairro">
        <input type="text" name="cidade" placeholder="Cidade">
        <input type="text" name="estado" placeholder="Estado">
        <input type="submit" value="Registrar">
    </form>

    <?php
        if(isset($_POST["cep"]) && isset($_POST["logradouro"]) && isset($_POST["bairro"]) && isset($_POST["cidade"]) && isset($_POST["cidade"])){
            $cep = $_POST["cep"];
            $log = $_POST["logradouro"];
            $bar = $_POST["bairro"];
            $cid = $_POST["cidade"];
            $est = $_POST["estado"];

            require_once "Endereco.class.php";
            $endereco = new Endereco();
            $endereco->inserir($cep, $log, $bar, $cid, $est);

            echo "Inserido com sucesso!";
        }
    ?>
</body>
</html>