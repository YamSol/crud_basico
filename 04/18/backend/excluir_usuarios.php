<?php
require_once " ../conexao.php";
$id_usuario = $_GET["id_usuario"];
$sql = "DELETE FROM usuarios WHERE id=:id LIMIT=1";
$_ = $conn -> prepare($sql);
$_ -> binValue(":id", $id_usuario);
$_ -> execute();

echo("<script>log('Registro [".$id_usuario."]')</script>");
header("Location: backend_usuarios.php");

?>