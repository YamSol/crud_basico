<?php
//importar conexao
require_once "../conexao.php";

//preparar e executar a query no DB
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

if ($_POST["classificacao"] == "usuario") {
    //sql statement
    $sql = "INSERT INTO `usuarios`(`nome`, `cpf`, `senha`, `created`, `modified`) VALUES(:nome, :cpf, :senha, NOW(), NOW())";

} elseif ($_POST["classificacao"] == "aluno") {
    //dados exclusivos alunos
    $data_nasc = $_POST["data_nasc"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $email = $_POST["email"];

    //sql statement
    $sql = "INSERT INTO `alunos`(`nome`, `cpf`, `senha`, `data_nasc`, `endereco`, `cep`, `bairro`, 
        `cidade`, `uf`, `created`, `modified`, `email`) 
        VALUES(:nome, :cpf, :senha, :data_nasc, :endereco, :cep, :bairro, :cidade, :uf, NOW(), NOW(), :email)";
}


$_ = $conn->prepare($sql);
$_->bindParam(":nome", $nome);
$_->bindParam(":cpf", $cpf);
$_->bindParam(":senha", $senha);
//bind param for 'alunos'
if ($_POST["classificacao"] == "aluno") {
    $_->bindParam(":data_nasc", $data_nasc);
    $_->bindParam(":endereco", $endereco);
    $_->bindParam(":cep", $cep);
    $_->bindParam(":bairro", $bairro);
    $_->bindParam(":cidade", $cidade);
    $_->bindParam(":uf", $uf);
    $_->bindParam(":email", $email);
}
$_->execute();

//retornar a pagina de listagem
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