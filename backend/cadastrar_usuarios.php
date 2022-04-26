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
    <form action="proc_cadastrar" method="post">
        <!-- login -->
        <label for="login">Login:</label>
        <input type="text" name="login" id="id_login">

        <!-- cpf -->
        <label for="cpf">CPF:</label>
        <input type="number" name="cpf" id="id_cpf">

        <!-- senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="id_senha">
        
        <!-- enviar -->
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>