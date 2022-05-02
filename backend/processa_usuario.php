<?php
//importar conexao
    require_once "../conexao.php";

//preparar e executar a query no DB
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO `usuarios`(`nome`, `cpf`, `senha`) VALUES(:nome, :cpf, :senha)";

    $_ = $conn->prepare($sql);
    $_->bindParam(":nome",$nome);
    $_->bindParam(":cpf",$cpf);
    $_->bindParam(":senha",$senha);
    $_->execute();

//retornar a pagina de listagem
    header("Location: listar_usuarios.php");

?>