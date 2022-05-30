<?php
// importar arquivo de conexão
include_once "conexao.php";

// recuperar dados do formulario
$nome       = $_POST["nome"];
$cpf        = $_POST["cpf"];
$senha      = $_POST["senha"];
$data_nasc  = $_POST["data_nasc"];
$endereco   = $_POST["endereco"];
$cep       = $_POST["cep"];
$bairro       = $_POST["bairro"];
$cidade       = $_POST["cidade"];
$uf       = $_POST["uf"];
$email       = $_POST["email"];

//preparar e executar query
$sql = "INSERT INTO alunos (nome, cpf, senha, data_nasc, endereco, cep, bairro, cidade, uf, email, modified, created) VALUES (:nome, :cpf, :senha, :data_nasc, :endereco, :cep, :bairro, :cidade, :uf, :email, NOW(), NOW())";
$_ = $conn->prepare($sql);
$_->bindValue(":nome", $nome);
$_->bindValue(":cpf", $cpf);
$_->bindValue(":senha", $senha);
$_->bindValue(":data_nasc", $data_nasc);
$_->bindValue(":endereco", $endereco);
$_->bindValue(":cep", $cep);
$_->bindValue(":bairro", $bairro);
$_->bindValue(":cidade", $cidade);
$_->bindValue(":uf", $uf);
$_->bindValue(":email", $email);
$_->execute();

header("Location: ../../index.php");

?>