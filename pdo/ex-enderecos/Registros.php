<?php 
    require_once "autoload.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        .items{
            border-radius: 20px;
            border-style: solid;
            border-width: 3px;
            padding: 10px;
        }
        .container{
            display: flex;
            justify-content: left;
            flex-direction: row;
        }
    </style>
</head>
<body>
    <?php 
    try {
        $registros = Endereco::getEnderecos();
    } catch (PDOException $e) {
        echo "<p>Ocorreu um erro ao recuperar as disciplinas.</p>";
        throw new PDOException($e->getMessage());
    }

    foreach ($registros as $registro) {
       ?> 
        <div class="container">
            <div class='items'>
                <h4><?=$registro->getCep()?></h4>
                <h4><?=$registro->getLogradouro()?></h4>
                <h4><?=$registro->getBairro()?></h4>
                <h4><?=$registro->getCidade()?></h4>
                <h4><?=$registro->getEstado()?></h4>
            </div>
        </div>
    <?php 
    }
    ?>
</body>
</html>