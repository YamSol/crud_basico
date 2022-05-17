<?php

//listar usuarios Aula 04.04.2022 SEM BOOSTRAP
require_once "..\conexao.php";

$sql = "SELECT * from usuarios";
$_ = $conn->prepare($sql);
$_->execute();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar usuarios</title>

    <style>
        button {
            width: 100%;
            height: 40px;
            background-color: gray;
        }
    </style>

</head>

<body>
    <h1>Listar usuarios</h1>
    <a class="btn btn-success" href="cadastrar_usuarios.php?file=backend">Cadastrar usuarios</a>
    <br><br>
    <table border="3px" width="100%">
        <thead>
            <tr>
                <th>NOME</th>
                <th>CPF</th>
                <th>SENHA</th>
                <th>CRIADO</th>
                <th>EDITADO</th>
                <th>EDITAR</th>
                <th>EXCLUIR</th>
            </tr>
        <tbody>
            <?php
            while ($usuario = $_->fetch(PDO::FETCH_ASSOC)) { ?>
                <style>td {text-align: center;}</style>
                <tr>
                    <td><?php echo utf8_encode($usuario['nome']); ?></td>
                    <td><?php echo utf8_encode($usuario['cpf']); ?></td>
                    <td><?php echo utf8_encode($usuario['senha']); ?></td>
                    <td><?php if(isset($usuario['created'])){echo date('d/m/Y H:i:s', strtotime($usuario['created']));} ?></td>
                    <td><?php if(isset($usuario['modified'])){echo date('d/m/Y H:i:s', strtotime($usuario['modified']));} ?></td>
                    <td style="text-align: center; font-size: 18px; background: rgb(200,180,80);"><a href="editar_usuario.php?id_usuario=<?php echo $usuario["id"]; ?>&classificacao=usuario&file=listar">Editar</a></td>
                    <td style="text-align: center; font-size: 18px; background: rgb(200,180,80);"><a href="excluir_cadastro.php?id_usuario=<?php echo $usuario["id"]; ?>&classificacao=usuario&file=listar">Excluir</a></td>
                </tr>
            <?php }; ?>

        </tbody>
        </thead>
    </table>
</body>

</html>