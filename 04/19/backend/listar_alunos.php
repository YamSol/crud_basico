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
    button{
        width:100%;
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
            while ($aluno = $_->fetch(PDO::FETCH_ASSOC)) {
                echo ' <tr>';
                echo ' <td>'.$aluno['id'].'</td>';
                echo ' <td>'.$aluno['nome'].'</td>';
                echo ' <td>'.$aluno['cpf'].'</td>';
                echo ' <td>'.$aluno['data_nasc'].'</td>';
                echo ' <td>'.$aluno['endereco'].'</td>';
                echo ' <td>'.$aluno['cep'].'</td>';
                echo ' <td>'.$aluno['bairro'].'</td>';
                echo ' <td>'.$aluno['cidade'].'</td>';
                echo ' <td>'.$aluno['uf'].'</td>';
                echo ' <td>'.$aluno['senha'].'</td>';
                echo ' <td>'.$aluno['email'].'</td>';
                echo ' </tr>';
               
                echo ' <tr>';
                echo ' <th>MODIFIED</th>';                
                echo ' <th>CREATED</th>';  
                echo ' </tr>';
                
                
                echo ' <tr>';
                echo ' <td>'.$aluno['modified'].'</td>';
                echo ' <td>'.$aluno['created'].'</td>';
                echo ' </tr>';

            };
            ?>

        </tbody>
        </thead>
    </table>
</body>

</html>