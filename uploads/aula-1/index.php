<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="up.php" method="post">
        Nome: <input type="text" name="nome"><br>
        <input type="hidden" name="MAX_FILE_SIZE" value="50000">
        Foto: <input type="file" name="foto"><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

<?php 
$_ERRO[0] = "Não houve erro.";
$_ERRO[1] = "O arquivo no upload é maior do que o limite suportado pelo php.";
$_ERRO[2] = "O arquivo ultrapassa o limite de tamanho especificado no HTML.";
$_ERRO[3] = "O upload do arquivo foi feito parcialmente.";
$_ERRO[4] = "Não foi feito o upload do arquivo.";

if($_FILES['foto']['error'] != 0)
    die("Não foi possivel fazer o upload. Erro: <b>".$ERRO[$FILES['foto']['error']]);


$extensoes = array('jpg', 'png', 'gif');
$pedacos = explode('.', $_FILES['foto']['name']);
$extensao = strlower(end($pedacos));
if(array_search(($extensao, $extensoes))=== false){
    echo "Por favor, envie arquivos com as seguintes extensões: ";
    for($i = 0;$i < count($extensoes); $i++)
        echo $extensoes[$i]." ";
    die();
}

try {
    $con = new PDO("mysql:host=localhost;dbname=cadastro","root","12345678");
    $con->setAttribute(PDO::AFTER_ERRMODE,PDO:ERRMODE_EXCEPTION);
    $pst = $con->prepare("insert into contatos(nome) values (?)");
    $pst->bindValue(1, $_POST['nome']);
    $pst->execute();
    $codigo = $con->lastInsertId();
} catch (PDOException $p) {
    echo $p->getMessage();
}

$uploadfile = "./images/".$codigo.basename($_FILES['foto']['name']);
if(move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)){
    try{
        $pst = $con->prepare("update contatos set foto=? where codigo=?");
        $pst->bindValue(1, $codigo.basename($_FILES['foto']['name']));
        $pst->bindValue(2, $codigo);
        $pst->execute();
        echo "Cadastro efetuado com sucesso";
    }catch(PDOException $e){
        echo $p->getMessage();
    }
} else{
    echo "Não foi possivel enviar o arquivo. O cadastro não foi efetuado.";
    try {
        //code...
    } catch (\Throwable $th) {
        //throw $th;
    }
}
?>