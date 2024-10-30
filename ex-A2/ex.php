<?php
// Verifica se o cookie 'count' não existe e o inicializa
if (!isset($_COOKIE['count'])) {
    setcookie('count', 0, time() + 86400, "/");
}
// Zera o cookie se o parâmetro GET 'x' for definido
if (isset($_GET['x'])) {
    setcookie('count', 0, time() - 1, '/');
    header("Location: ex.php"); // Redireciona para evitar recarregar com o parâmetro GET
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="ex.php">
        <label for="n">Número</label>
        <input name="n" type="number">
        <button type="submit">Somar</button>
    </form>

    <?php
    // Inicializa a variável de soma com o valor do cookie ou 0 se não estiver definido
    $soma = isset($_COOKIE['count']) ? $_COOKIE['count'] : 0;

    // Se o formulário for submetido, soma o valor
    if (isset($_POST['n'])) {
        $valor = (int)$_POST['n'];
        $soma += $valor;
        setcookie('count', $soma, time() + 86400, "/"); // Salva a nova soma no cookie
    }

    echo "Soma está em: " . $soma;
    ?>

    <a href="ex.php?x=0">Zerar contagem</a>
</body>
</html>
