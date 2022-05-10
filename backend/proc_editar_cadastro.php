<?php

//importar arquivo de conexão
require_once "../conexao.php";

//preparar e executar no banco de dados a inserção
$id_usuario = $_POST["id_usuario"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];


if ($_POST["classificacao"] == "aluno") {
    $data_nasc = $_POST["data_nasc"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $email = $_POST["email"];
    
    $sql = "UPDATE usuarios SET `nome`=:nome, `cpf` =:cpf, `senha`=:senha, `modified`=NOW() WHERE id=:id";
} elseif ($_POST["classificacao"] == "usuario") {
    $sql = "UPDATE usuarios SET `nome`=:nome, `cpf` =:cpf, `senha`=:senha,`data_nasc`=:data_nasc, `endereco`=:endereco, `cep`=:cep,
 `bairro`=:bairro, `cidade`=:cidade, `uf`=:uf, `email`=:email, `modified`=NOW() WHERE id=:id";
}
$comando = $conn->prepare($sql);
$comando->bindParam(":id", $id_usuario);
$comando->bindParam(":nome", $nome);
$comando->bindParam(":cpf", $cpf);
$comando->bindParam(":senha", $senha);
if ($_POST["classificacao"] == "aluno") {
    $comando->bindParam(":data_nasc", $data_nasc);
    $comando->bindParam(":endereco", $endereco);
    $comando->bindParam(":cep", $cep);
    $comando->bindParam(":bairro", $bairro);
    $comando->bindParam(":cidade", $cidade);
    $comando->bindParam(":uf", $uf);
    $comando->bindParam(":email", $email);
}
$comando->execute();

//retornar à página da listagem

if ($_POST["file"] == "listar") {
    header("Location: listar_usuarios.php");
} else if ($_POST["file"] == "backend") {
    header("Location: backend_usuarios.php");
} else {
    header("Location: ../login.php");
}
