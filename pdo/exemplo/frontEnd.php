<?php
    require_once "Autoload.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Disciplinas</title>
    <style>
        tr:nth-child(odd){background:#ccc}
        tr:nth-child(even){background:#fff}
    </style>
</head>
<body>
    <?php
        try{
            $disciplinas = Disciplina::getDisciplinas();
        } catch(PDOException $p){
            echo "<p>Ocorreu um erro ao recuperar as disciplinas.</p>";
            throw new PDOException($e->getMessage());
        }
    ?>
    <table>
        <tr><th>ID</th><th>Descrição</th></tr>
        <?php 
            foreach($disciplinas as $disciplina){
        ?>
                <tr>
                    <td><?=$disciplina->getId();?></td>
                    <td><?=$disciplina->getDescricao();?></td>
                </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>