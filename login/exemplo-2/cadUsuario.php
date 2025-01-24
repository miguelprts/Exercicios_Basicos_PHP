<?php 
require_once("autoload.php");
$usuario = new Usuario($_POST['nome_cad'], $_POST['email_cad'], $_POST['senha_cad']);
try {
    $usuario->salvar();
    echo "<script>window.alert('Cadastro efetuado com sucesso.'); window.location.href='index.php#paraLogin';</script>";
} catch(PDOException $p){
    echo "<div class='erro'>".$p->getMessage()."</div>";
} catch (Exception $e) {
    echo"<script>window.alert('".$e->getMessage()."');
    window.location.href='index.php';</script>";
}
?>