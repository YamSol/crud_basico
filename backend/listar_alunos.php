<?php

//listar usuarios Aula 04.04.2022 SEM BOOSTRAP
require_once "..\conexao.php";

$sql = "SELECT * from alunos";
$_ = $conn->prepare($sql);
$_->execute();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar alunos</title>

    <style>
        button {
            width: 100%;
            height: 40px;
            background-color: gray;
        }
    </style>

</head>

<body>
    <h1>Listar alunos</h1>
    <br><br>
    <table border="3px" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>cpf</th>
                <th>data_nasc</th>
                <th>endereco</th>
                <th>cep</th>
                <th>bairro</th>
                <th>cidade</th>
                <th>uf</th>
                <th>senha</th>
                <th>email</th>
            </tr>
        <tbody>
            <?php
            while ($aluno = $_->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $aluno['id']; ?></td>
                    <td><?php echo $aluno['nome']; ?></td>
                    <td><?php echo $aluno['cpf']; ?></td>
                    <td><?php echo $aluno['data_nasc']; ?></td>
                    <td><?php echo $aluno['endereco']; ?></td>
                    <td><?php echo $aluno['cep']; ?></td>
                    <td><?php echo $aluno['bairro']; ?></td>
                    <td><?php echo $aluno['cidade']; ?></td>
                    <td><?php echo $aluno['uf']; ?></td>
                    <td><?php echo $aluno['senha']; ?></td>
                    <td><?php echo $aluno['email']; ?></td>
                </tr>
                <tr>
                    <th>MODIFIED</th>
                    <th>CREATED</th>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 18px; background: rgb(200,180,80);"><a href="editar_usuario.php?id_usuario=<?php echo $aluno["id"]; ?>&classificacao=usuario&file=listar">Editar</a></td>
                    <td style="text-align: center; font-size: 18px; background: rgb(200,180,80);"><a href="excluir_cadastro.php?id_usuario=<?php echo $aluno["id"]; ?>&classificacao=usuario&file=listar">Excluir</a></td>
                </tr>
            <?php } ?>

        </tbody>
        </thead>
    </table>
</body>

</html>