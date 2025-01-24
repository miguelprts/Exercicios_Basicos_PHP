<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Escola</title>
</head>
<body>
    <form action="Form.php" method="POST">
        <input type="text" name="descricao">
        <input type="submit" value="Adicionar">
    </form>

    <?php
    require_once("Disciplina.class.php");

    $desc = 0;

    if(isset($_POST["descricao"])){
        $desc = $_POST['descricao'];

    $d = new Disciplina();

    try {
        $d->inserir($desc);
        echo "Inserido!";
    } catch (Exception $e) {
        echo "". $e->getMessage() ."";
    }
    }
?>
</body>
</html>