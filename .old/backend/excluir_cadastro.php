<?php

require_once "../conexao.php";

$id_usuario = $_GET["id_usuario"];
$classificacao = $_GET["classificacao"];
$file_from = $_GET["file"];

if ($classificacao == "aluno") {
    $table = "alunos";
} else if ($classificacao == "usuario") {
    $table = "usuarios";
}

//create and execute statement
$sql = "DELETE FROM ".$table." WHERE id=:id LIMIT 1";
$_ = $conn->prepare($sql);
$_->bindValue(":id", $id_usuario);
$_->execute();

//log usuario cadastrado
echo ("<script>log('Registro [" . $id_usuario . "]')</script>");

//retorna o usuario 
header("Location: ".$file_from."_".$table.".php");
