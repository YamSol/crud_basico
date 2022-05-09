<?php

//importar arquivo de conexão
require_once "../conexao.php";

//preparar e executar no banco de dados a inserção
$id_usuario = $_POST["id_usuario"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$cpf= $_POST["cpf"];
$sql = "UPDATE usuarios SET `nome`=:nome, `cpf` =:cpf, `senha`=:senha, 
`modified`=NOW() WHERE id=:id";
$comando = $conn->prepare($sql);
$comando->bindParam(":id",$id_usuario);
$comando->bindParam(":nome",$nome);
$comando->bindParam(":senha",$senha);
$comando->bindParam(":cpf",$cpf);
$comando->execute();

//retornar à página da listagem

header("Location: listar_usuarios.php");

?>
