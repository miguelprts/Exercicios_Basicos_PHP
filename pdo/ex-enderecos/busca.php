<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busque um CEP</title>
</head>
<body>
    <form action="busca.php" method="POST">
        <input type="text" name="cep" id="cep" maxlength="8">
        <input type="submit" value="Registrar">
    </form>
    <br>

    <?php 
        if(isset($_POST['cep'])){
            $valor = $_POST['cep'];

        $js = file_get_contents('https://viacep.com.br/ws/'.$valor.'/json');

        $data = json_decode($js);

        print_r($data);
        if(isset($data->erro)){
            
            echo '<h3>Não existe esse CEP.</h3>';
        }
        else{
            echo 'Localidade: '.$data->localidade.'<br>Estado: '.$data->estado.'<br>CEP: '.$data->cep;
        }
    }
    ?>
</body>
</html>