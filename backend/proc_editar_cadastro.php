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

    $sql = "UPDATE alunos SET `nome`=:nome, `cpf` =:cpf, `senha`=:senha,`data_nasc`=:data_nasc, `endereco`=:endereco, `cep`=:cep,
 `bairro`=:bairro, `cidade`=:cidade, `uf`=:uf, `email`=:email, `modified`=NOW() WHERE id=:id";
} elseif ($_POST["classificacao"] == "usuario") {
    $sql = "UPDATE usuarios SET `nome`=:nome, `cpf` =:cpf, `senha`=:senha, `modified`=NOW() WHERE id=:id";
}
$comando = $conn->prepare($sql);
$comando->bindParam(":id", $id_usuario);
$comando->bindParam(":nome", utf8_decode($nome));
$comando->bindParam(":cpf", $cpf);
$comando->bindParam(":senha", $senha);
if ($_POST["classificacao"] == "aluno") {
    $comando->bindParam(":data_nasc", $data_nasc);
    $comando->bindParam(":endereco", utf8_decode($endereco));
    $comando->bindParam(":cep", $cep);
    $comando->bindParam(":bairro", utf8_decode($bairro));
    $comando->bindParam(":cidade", utf8_decode($cidade));
    $comando->bindParam(":uf", $uf);
    $comando->bindParam(":email",utf8_decode($email));
}
echo ($comando->execute());

//retornar à página da listagem

if ($_POST["file"] == "listar") {
    if ($_POST["classificacao"] == "usuario") {
        header("Location: listar_usuarios.php");
    } else {
        header("Location: listar_alunos.php");
    }
} else if ($_POST["file"] == "backend") {
    if ($_POST["classificacao"] == "usuario") {
        header("Location: backend_usuarios.php");
    } else {
        header("Location: backend_alunos.php");
    }
} else {
    header("Location: ../login.php");
}
