<?php
require_once "../conexao.php";
$id_usuario = $_GET["id_usuario"];
$classificacao = $_GET["classificacao"];
if ($classificacao == "aluno") {
    $table = "alunos";
    $file = "backend_alunos.php";
} else if ($classificacao == "usuario") {
    $table = "usuarios";
    $file = "backend_usuarios.php";
}
$sql = "DELETE FROM ".$table." WHERE id=:id LIMIT 1";
$_ = $conn->prepare($sql);
$_->bindValue(":id", $id_usuario);
$_->execute();


header("Location: ".$file);
echo ("<script>log('Registro [" . $id_usuario . "]')</script>");
