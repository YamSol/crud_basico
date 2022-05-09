<?php

//importar arquivo de conexão

require_once "../conexao.php";

if (isset($_GET["id_usuario"])) {

    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $comando = $conn->prepare($sql);
    $comando->bindValue(":id", $_GET["id_usuario"]);
    $comando->execute();

    //passa para $id_usuario os usuarios da query
    $id_usuario = $comando->fetch();

} else {
    if ($_GET["file"] == "listar") {
        header("Location: listar_usuarios.php");
    } else if ($_GET["file"] == "backend") {
        header("Location: backend_usuarios.php");
    } else {
        header("Location: ../login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITAR - <?php echo utf8_encode($id_usuario["nome"]); ?></title>
</head>

<body>

    <body>
        <h1 style="text-align: center;">Editar - CRUD SIMPLES</h1>
        <div style="height: 90%; display: flex; align-items: center; justify-content: center;">

            <form method="POST" action="proc_editar_usuario.php">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo utf8_encode($id_usuario["nome"]); ?>" />
                <span><?php echo utf8_encode($id_usuario["nome"]); ?></span>

                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" value="<?php echo $id_usuario["cpf"]; ?>" />

                <label for="senha">Senha:</label>
                <input type="text" name="senha" value="<?php echo utf8_encode($id_usuario["senha"]); ?>" />

                <input type="hidden" name="id_usuario" value="<?php echo $id_usuario["id"] ?>" />
                <input type="submit" value="Salvar" />
            </form>
        </div>
    </body>

</html>

</body>

</html>