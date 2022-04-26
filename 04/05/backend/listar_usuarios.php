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
    button{
        width:100%;
        height: 40px;
        background-color: gray;
    }
    </style>

</head>

<body>
    <h1>Listar usuarios</h1>
    <br><br>
    <table border="3px" width="100%">
        <thead>
            <tr>
                <th>#ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>SENHA</th>
                <th>EDITAR</th>
                <th>EXCLUIR</th>
            </tr>
        <tbody>
            <?php
            while ($usuario = $_->fetch(PDO::FETCH_ASSOC)) {
                echo ' <tr>';
                echo ' <td>'.$usuario['id'].'</td>';
                echo ' <td>'.$usuario['nome'].'</td>';
                echo ' <td>'.$usuario['cpf'].'</td>';
                echo ' <td>'.$usuario['senha'].'</td>';
                echo ' <td style="text-align: center"><button>Editar</button></td>';
                echo ' <td style="text-align: center"><button>Excluir</button></td>';
                echo ' </tr>';
            };
            ?>

        </tbody>
        </thead>
    </table>
</body>

</html>