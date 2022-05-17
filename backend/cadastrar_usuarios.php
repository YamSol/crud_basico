<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuários</title>
</head>

<body>
    <h1>Cadastro de Usuários</h1>
    <form action="insere_cadastro.php" method="POST">
        <!-- login -->
        <label for="login">Nome:</label>
        <input type="text" name="nome" id="id_nome">

        <!-- cpf -->
        <label for="cpf">CPF:</label>
        <input type="text" id="id_cpf" name="cpf" \ pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" \ placeholder="Sem pontos e traços"/>

        <!-- senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="id_senha">

        <input type="hidden" name="classificacao" value="usuario"/>
        <input type="hidden" name="file" value="<?php echo $_GET["file"] ?>"/>
        <!-- enviar -->
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>