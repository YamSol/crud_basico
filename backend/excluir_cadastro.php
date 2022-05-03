<?php

require_once "../conexao.php";

$id_usuario = $_GET["id_usuario"];
$classificacao = $_GET["classificacao"];
$type = $_GET["listar"];

//substitute 

if ($classificacao == "aluno") {
    $table = "alunos";
    $class = "backend_alunos.php";
} else if ($classificacao == "usuario") {
    $table = "usuarios";
    $class = "backend_usuarios.php";
}

//create and execute statement
$sql = "DELETE FROM ".$table." WHERE id=:id LIMIT 1";
$_ = $conn->prepare($sql);
$_->bindValue(":id", $id_usuario);
$_->execute();

$path = $type+"_"+$class;

header("Location: ".$path);
echo ("<script>log('Registro [" . $id_usuario . "]')</script>");
