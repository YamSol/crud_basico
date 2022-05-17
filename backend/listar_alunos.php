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
                <th>NOME</th>
                <th>CPF</th>
                <th>DATA DE NASCIMENTO</th>
                <th>ENDEREÇO</th>
                <th>cep</th>
                <th>bairro</th>
                <th>cidade</th>
                <th>uf</th>
                <th>senha</th>
                <th>email</th>
            </tr>
	<tbody>
	<style>
	  td {
	    text-align: center;
	    font-size: 15pt;
	  }
	</style>
            <?php
            while ($aluno = $_->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo utf8_encode($aluno['nome']); ?></td>
                    <td><?php echo utf8_encode($aluno['cpf']); ?></td>
                    <td><?php echo date("d/m/Y", strtotime($aluno['data_nasc'])); ?></td>
                    <td><?php echo utf8_encode($aluno['endereco']); ?></td>
                    <td><?php echo utf8_encode($aluno['cep']); ?></td>
                    <td><?php echo utf8_encode($aluno['bairro']); ?></td>
                    <td><?php echo utf8_encode($aluno['cidade']); ?></td>
                    <td><?php echo utf8_encode($aluno['uf']); ?></td>
                    <td><?php echo utf8_encode($aluno['senha']); ?></td>
                    <td><?php echo utf8_encode($aluno['email']); ?></td>
                </tr>
                <tr>
                    <th>MODIFIED</th>
                    <th>CREATED</th>
                    <th>EDITAR</th>
                    <th>EXCLUIR</th>
                </tr>
                <tr>
                    <td><?php if(isset($aluno['modified'])){echo date('d/m/Y H:i:s', strtotime($aluno['modified']));} ?></td>
                    <td><?php if(isset($aluno['created'])){echo date('d/m/Y H:i:s', strtotime($aluno['created']));} ?></td>
                    <td style="background: rgb(200,180,80);"><a href="editar_aluno.php?id_usuario=<?php echo $aluno["id"]; ?>&classificacao=aluno&file=listar">Editar</a></td>
                    <td style="background: rgb(200,180,80);"><a href="excluir_cadastro.php?id_usuario=<?php echo $aluno["id"]; ?>&classificacao=aluno&file=listar">Excluir</a></td>
                </tr>
            <?php } ?>

        </tbody>
        </thead>
    </table>
</body>

</html>
