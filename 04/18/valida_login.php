<?php
if (isset($_POST["acao"])) {
    //importar arquivo de conexao
    include "conexao.php";
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    //verificar na base
    $sql = "select * from usuarios where usuarios.cpf = :login and usuarios.senha = :senha";
    $comando = $conn->prepare($sql);
    $comando->bindParam(":login", $usuario);
    $comando->bindParam(":senha", $senha);
    $comando->execute();
    if ($comando->rowcount() == 1) {
        // echo " | Existe esse usuário em sua base de dados!!!!!";
        // echo ($usuario);
        header("Location: backend/backend_usuarios");
    } else {
        echo " | Erro! Usuário ou senha incorretos!";
        // header("Location: /");
    }
} else {
    echo "ERRROOOOOOOOOOO. ACESSO INDEVIDO!!!1!1!!";
    // header("Location: ../../login.php");
}
